<?php

namespace App\Console\Commands;

use App\Models\User;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;

class RegisterSuperAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a super user for rightdo';

    /**
     * Execute the console command.
     *
     * @return int
     */
    private $user;

    public function __construct(User $user)
    {
        parent::__construct();

        $this->user = $user;
    }

    public function handle()
    {
        $this->info('Creating a super user...');

        $details = $this->getDetails();

        $admin = $this->user->createSuperAdmin($details);

        $this->info('Super user is created.');
    }

    /**
     * Ask for admin details.
     *
     * @return array
     */
    private function getDetails(): array
    {
        try {
            $details['name'] = $this->askWithValidate('Enter name', 'required|min:2|max:60');
            $details['email'] = $this->askWithValidate('Enter email address', 'required|email|unique:users,email');
            $details['password'] = bcrypt($this->askWithValidate('Enter password', 'required|min:6|max:60', true));

            return $details;
        } catch (Exception $exception) {
            $this->error('User could not be created.');
            $this->error($exception->getMessage());

            return 1;
        }
    }

    /**
     * @param  string  $message
     * @param  string  $rules
     * @param  bool  $secret
     * @return string
     */
    protected function askWithValidate(string $message, string $rules, $secret = false): string
    {
        do {
            if ($secret) {
                $input = $this->secret($message);
            } else {
                $input = $this->ask($message);
            }
            $validate = $this->validate(compact('input'), ['input' => $rules]);
            if ($validate['error']) {
                $this->error($validate['message']);
            }
        } while ($validate['error']);

        return $input;
    }

    /**
     * @param  array  $data
     * @param  array  $rules
     * @return array
     */
    protected function validate(array $data, array $rules): array
    {
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return [
                'error' => true,
                'message' => $validator->messages()->first(),
            ];
        }

        return [
            'error' => false,
        ];
    }
}
