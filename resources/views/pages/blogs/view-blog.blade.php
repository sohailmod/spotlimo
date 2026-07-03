@extends('layouts.app')

@section('content')
    <style>
        .blogContainer{

            margin-top: 5%;
            margin-bottom: 10%;
            /* margin: 5% auto; */
            margin-left: 15%;
                         font-size: 18px
            
        }
        .social-icons-list li a {

            color: #00707b;
             !important;
        }

        .social-icons-list li a:hover {

            color: #fee57c;
            ;
             !important;
        }

        a {
            text-decoration: none;
            color: #00707b;
             !important;

        }
        .blogTitle ,h1,h2 {
            font-family: 'playfair display' ;
            font-weight: 800;
            margin-top: 15px;
            color: black;
     
    /* text-align: center; */
    border-bottom: 3px solid #00707b;
    text-transform: capitalize;

    }

    h3{
                    font-family: 'playfair display' ;
                    font-weight: 600;
                    font-size: 22px;



    }

/* For webkit-based browsers */
/* ::-webkit-scrollbar {
    width: 10px;
}

::-webkit-scrollbar-thumb {
    background-color: #888;
    border-radius: 5px;
} */

/* For Firefox */
/* .scrollbar {
    scrollbar-color: #888 #f1f1f1;
}
.scrollbar-thumb {
    background-color: #888;
} */
/* For webkit-based browsers */
/* ::-webkit-scrollbar {
    display: none;
} */

/* For Firefox */
.scrollbar {
    scrollbar-width: none;
}
.caption{
    text-align: center;
    color: #383232
}
/* Your regular CSS styles for screens above 576 pixels */

/* Media query for screens below 576 pixels */
@media screen and (max-width: 577px) {
    .blogContainer{


margin-left: 0%;
             

}
 
}



    </style>
  <div class="container blogContainer ">
    <div class="row  container">
        <div class="col-md-10 col-lg-10 ">
            <div class="blog-post">
                <h1 class="text-center blogTitle pb-1">{{ $blogPost->title }}</h1>
                <p class="introduction mt-4">
                    {!! $blogPost->introduction !!}
                </p>
                <img src="{{ $blogPost->first_image_url }}" alt="{{$blogPost->first_image_alt}}" class="img-fluid">
                <p class="caption"><strong><i>{!! $blogPost->first_image_caption !!}</i></strong></p>

                @php
                    $content = $blogPost->content;
                    $wordCount = 0;
                    $gap = 300;
                    $firstImageGap = rand(150, 200); // Random gap for the first image after introduction
                    $imageCount = 0; // Counter for the number of images displayed

                    // Split the content into paragraphs
                    $paragraphs = preg_split("/\r\n|\n|\r/", $content);

                    // Array to hold paragraphs with images
                    $paragraphsWithImages = [];

                    foreach ($paragraphs as $paragraph) {
                        // Find the position of the first full stop after the specified word count for the introduction
                        if ($wordCount >= $firstImageGap && $imageCount === 0) {
                            $pos = strpos($paragraph, '.');
                            if ($pos !== false) {
                                $paragraphsWithImages[] = substr($paragraph, 0, $pos + 1); // Include the full stop in the introduction
                                $wordCount = 0; // Reset word count after the introduction
                                $paragraph = substr($paragraph, $pos + 1); // Remove the displayed content from the paragraph
                                $paragraphsWithImages[] = '</p>';
                                $paragraphsWithImages[] = '<img src="' . $blogPost->second_image_url . '" alt="'.$blogPost->second_image_alt.'" class="img-fluid">';
                                $paragraphsWithImages[] = '<p class="caption"><strong><i>' . $blogPost->second_image_caption . '</i></strong></p>';
                                $imageCount++; // Increment the image count to show the second image
                            }
                        }

                        // Check if it's time to insert the third image and content
                        if ($wordCount  >= ($gap+100) && $imageCount === 1) {
                            $paragraphsWithImages[] = '</p>';
                            $paragraphsWithImages[] = '<img src="' . $blogPost->third_image_url . '" alt="'.$blogPost->third_image_alt.'" class="img-fluid">';
                            $paragraphsWithImages[] = '<p class="caption"><strong><i>' . $blogPost->third_image_caption . '</i></strong></p>';
                            $imageCount++; // Increment the image count to show the third image
                        }

                        // Count the words in the paragraph
                        $wordCount += str_word_count($paragraph);
                        $paragraphsWithImages[] = $paragraph;
                    }
                @endphp

                @foreach ($paragraphsWithImages as $paragraph)
                    {!! $paragraph !!} {{-- Use {!! !!} to render HTML tags in the paragraphs --}}
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
