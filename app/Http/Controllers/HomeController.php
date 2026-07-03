<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\VehicleType;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    // ============================================================
    // CORE PAGES
    // ============================================================

    public function index()
    {
        $pageTitle = 'Spot Limo';
        $metaDescription = 'Spot Limo offers premium black car & limousine service across 20 Chicago suburbs. 24/7 airport transfers, weddings & corporate travel. Call 630-290-1761.';
        return view('pages.home', compact('pageTitle', 'metaDescription'));
    }

    public function contact()
    {
        $pageTitle = 'Contact Us';
        $metaDescription = 'Contact Spot Limo LLC for premium black car & limo service across 20 Chicago suburbs. Call or WhatsApp 630-290-1761 anytime — available 24/7.';
        return view('pages.contact-us', compact('pageTitle', 'metaDescription'));
    }

    public function aboutUs()
    {
        $pageTitle = 'About Us';
        $metaDescription = 'Learn about Spot Limo LLC — premier black car & limousine service based in Oakbrook Terrace IL, serving 20 Chicago suburbs with professional chauffeurs 24/7.';
        return view('pages.about-us.aboutus', compact('pageTitle', 'metaDescription'));
    }

    public function faqPage()
    {
        $pageTitle = 'FAQ | Spot Limo Chicago Suburbs Limo Service';
        $metaDescription = "Answers to common questions about Spot Limo's limo & black car service in Naperville, Schaumburg, Oak Brook, Hinsdale & 20 Chicago suburbs. Airport transfers, weddings, corporate travel. Call 630-290-1761.";
        return view('pages.faq', compact('pageTitle', 'metaDescription'));
    }

    // ============================================================
    // BLOG
    // ============================================================

    public function blogs()
    {
        $pageTitle = 'Blogs';
        $metaDescription = 'Read the Spot Limo blog for tips on luxury limo service, airport transfers, wedding transportation, and corporate car service across Chicago suburbs.';
        $blogPosts = BlogPost::orderBy('created_at', 'desc')->get();
        return view('pages.blogs.blogs', compact('blogPosts', 'pageTitle', 'metaDescription'));
    }

    public function showBlog($slug)
    {
        Log::info('Show Blog');
        $recentPosts  = BlogPost::latest()->take(6)->get();
        $popularPosts = BlogPost::orderBy('views', 'desc')->take(5)->get();
        $blogPost     = BlogPost::where('slug', $slug)->firstOrFail();
        $pageTitle    = $blogPost->title;
        $description  = $blogPost->title;
        $blogPost->increment('views');
        return view('pages.blogs.view-blog', compact('pageTitle', 'blogPost', 'recentPosts', 'popularPosts', 'description'));
    }

    // ============================================================
    // AIRPORT SERVICES
    // ============================================================

    public function airportServices()
    {
        $pageTitle = 'Airport Services';
        $metaDescription = "Spot Limo provides 24/7 airport limo service from 20 Chicago suburbs to O'Hare, Midway, Milwaukee & all Chicago area airports. Flat rate pricing. Call 630-290-1761.";
        return view('pages.services.airport-services', compact('pageTitle', 'metaDescription'));
    }

    public function ohareAirport()
    {
        $pageTitle = 'O\'Hare Airport Limo Service';
        $metaDescription = "O'Hare Airport limo service from Naperville, Schaumburg, Hinsdale, Oak Brook & 16 Chicago suburbs. 24/7 by Spot Limo. Call 630-290-1761.";
        return view('pages.services.airport.ohare-airport', compact('pageTitle', 'metaDescription'));
    }

    public function midwaySignature()
    {
        $pageTitle = 'Midway Airport Limo Service';
        $metaDescription = "Midway Airport limo service from Naperville, Schaumburg, Oak Brook & all Chicago suburbs. 24/7 flat rate transfers by Spot Limo. Call 630-290-1761.";
        return view('pages.services.airport.midway-signature', compact('pageTitle', 'metaDescription'));
    }

    public function milwaukeeAirport()
    {
        $pageTitle = 'Milwaukee Airport Limo Service';
        $metaDescription = 'Milwaukee Mitchell Airport limo service from Chicago suburbs. Professional black car transfers by Spot Limo available 24/7. Call 630-290-1761.';
        return view('pages.services.airport.milwaukee-airport', compact('pageTitle', 'metaDescription'));
    }

    public function dupageAirport()
    {
        $pageTitle = 'DuPage Airport Limo Service';
        $metaDescription = 'DuPage Airport limo & black car service from all Chicago suburbs. Professional transfers by Spot Limo available 24/7. Call 630-290-1761.';
        return view('pages.services.airport.dupage-airport', compact('pageTitle', 'metaDescription'));
    }

    public function chicagoAirport()
    {
        $pageTitle = 'Chicago Executive Airport Limo Service';
        $metaDescription = 'Chicago Executive Airport (PWK) limo service from all Chicago suburbs. Professional transfers by Spot Limo 24/7. Call 630-290-1761.';
        return view('pages.services.airport.chicago-airport', compact('pageTitle', 'metaDescription'));
    }

    public function garyInternational()
    {
        $pageTitle = 'Gary International Airport Limo Service';
        $metaDescription = 'Gary/Chicago International Airport limo service from Chicago suburbs. Professional black car transfers by Spot Limo 24/7. Call 630-290-1761.';
        return view('pages.services.airport.gary-international', compact('pageTitle', 'metaDescription'));
    }

    // ============================================================
    // EXECUTIVE & CHAUFFEUR SERVICES
    // ============================================================

    public function executiveTransport()
    {
        $pageTitle = 'Executive Transport';
        $metaDescription = 'Executive black car service across 20 Chicago suburbs. Spot Limo provides discreet, professional executive transportation 24/7. Call 630-290-1761.';
        return view('pages.services.executive-transport', compact('pageTitle', 'metaDescription'));
    }

    public function chauffeurServices()
    {
        $pageTitle = 'Chauffeur Services';
        $metaDescription = 'Professional chauffeur service across 20 Chicago suburbs. Hourly, airport, corporate & special event transportation by Spot Limo 24/7. Call 630-290-1761.';
        return view('pages.services.chauffeur-services', compact('pageTitle', 'metaDescription'));
    }

    public function chauffeurServicesCorporate()
    {
        $pageTitle = 'Corporate Chauffeur Services';
        $metaDescription = 'Corporate chauffeur service across Chicago suburbs. Executive black car for business travel, client pickups & corporate events. Spot Limo 24/7. Call 630-290-1761.';
        return view('pages.services.chauffeurs.chauffeur-services-corporate', compact('pageTitle', 'metaDescription'));
    }

    public function chauffeurServicesMajor()
    {
        $pageTitle = 'Major Events Chauffeur Services';
        $metaDescription = 'Professional chauffeur service for major events across Chicago suburbs. Spot Limo provides luxury transportation 24/7. Call 630-290-1761.';
        return view('pages.services.chauffeurs.chauffeur-services-major', compact('pageTitle', 'metaDescription'));
    }

    public function chauffeurServicesChicago()
    {
        $pageTitle = 'Chicago City Chauffeur Services';
        $metaDescription = 'Professional chauffeur service throughout Chicago city and suburbs. Spot Limo provides luxury black car transportation 24/7. Call 630-290-1761.';
        return view('pages.services.chauffeurs.chicago-city', compact('pageTitle', 'metaDescription'));
    }

    public function chauffeurServicesMidway()
    {
        $pageTitle = 'Midway Airport Chauffeur Services';
        $metaDescription = 'Professional chauffeur service to Midway Airport from all Chicago suburbs. Spot Limo 24/7. Call 630-290-1761.';
        return view('pages.services.chauffeurs.midway-airport', compact('pageTitle', 'metaDescription'));
    }

    public function chauffeurServicesOhare()
    {
        $pageTitle = 'O\'Hare Airport Chauffeur Services';
        $metaDescription = "Professional chauffeur service to O'Hare Airport from all Chicago suburbs. Spot Limo 24/7. Call 630-290-1761.";
        return view('pages.services.chauffeurs.ohare-airport', compact('pageTitle', 'metaDescription'));
    }

    public function multilingualChauffeursServices()
    {
        $pageTitle = 'Multilingual Chauffeur Services';
        $metaDescription = 'Multilingual chauffeur service across Chicago suburbs. Spot Limo provides professional drivers fluent in multiple languages 24/7. Call 630-290-1761.';
        return view('pages.services.chauffeurs.multilingual-chauffeurs-services', compact('pageTitle', 'metaDescription'));
    }

    // ============================================================
    // CORPORATE SERVICES
    // ============================================================

    public function corporateTransport()
    {
        $pageTitle = 'Corporate Travel';
        $metaDescription = 'Corporate black car service across 20 Chicago suburbs. Executive transportation, client pickups & corporate accounts by Spot Limo 24/7. Call 630-290-1761.';
        return view('pages.services.corporate-transport', compact('pageTitle', 'metaDescription'));
    }

    public function cooperateTravel()
    {
        $pageTitle = 'Corporate Travel';
        $metaDescription = 'Corporate black car service across 20 Chicago suburbs. Executive transportation & corporate accounts by Spot Limo 24/7. Call 630-290-1761.';
        return view('pages.services.interstate.cooperate-travel', compact('pageTitle', 'metaDescription'));
    }

    public function corporateLimoContract()
    {
        $pageTitle = 'Corporate Limo Contract';
        $metaDescription = 'Corporate limo contract service for Chicago suburb businesses. Monthly billing, priority booking & dedicated account management by Spot Limo. Call 630-290-1761.';
        return view('pages.services.corporate-limo.corporate-limo-contract', compact('pageTitle', 'metaDescription'));
    }

    public function meetGreet()
    {
        $pageTitle = 'Meet & Greet Service';
        $metaDescription = 'Professional meet & greet limo service at all Chicago area airports. Spot Limo provides personalized arrival service 24/7. Call 630-290-1761.';
        return view('pages.services.corporate-limo.meet-greet', compact('pageTitle', 'metaDescription'));
    }

    public function trackingServices()
    {
        $pageTitle = 'Flight Tracking Services';
        $metaDescription = 'Real-time flight tracking for all airport limo pickups from Chicago suburbs. Spot Limo monitors your flight 24/7. Call 630-290-1761.';
        return view('pages.services.corporate-limo.tracking-services', compact('pageTitle', 'metaDescription'));
    }

    public function whiteGlove()
    {
        $pageTitle = 'White Glove Limo Service';
        $metaDescription = 'White glove luxury limo service across Chicago suburbs. Spot Limo provides premium personalized transportation for discerning clients 24/7. Call 630-290-1761.';
        return view('pages.services.corporate-limo.white-glove', compact('pageTitle', 'metaDescription'));
    }

    // ============================================================
    // WEDDING & SPECIAL EVENTS
    // ============================================================

    public function weddingTransport()
    {
        $pageTitle = 'Wedding Transport';
        $metaDescription = 'Elegant wedding limo service across 20 Chicago suburbs. Stretch limos, luxury SUVs & executive sedans for your special day. Spot Limo. Call 630-290-1761.';
        return view('pages.services.wedding-transport', compact('pageTitle', 'metaDescription'));
    }

    public function weddingServices()
    {
        $pageTitle = 'Wedding Limo Services';
        $metaDescription = 'Spot Limo provides elegant wedding limo service across Naperville, Oak Brook, Hinsdale & 17 Chicago suburbs. Book your wedding car today. Call 630-290-1761.';
        return view('pages.services.wedding.wedding-services', compact('pageTitle', 'metaDescription'));
    }

    public function promServices()
    {
        $pageTitle = 'Prom Night Limo Service';
        $metaDescription = 'Prom night limo service for Chicago suburb high schools. Stretch limos & luxury SUVs available. Book early — prom season fills fast. Call 630-290-1761.';
        return view('pages.services.wedding.prom-nights', compact('pageTitle', 'metaDescription'));
    }

    public function holidayServices()
    {
        $pageTitle = 'Holiday Party Limo Service';
        $metaDescription = 'Holiday party limo service across Chicago suburbs. Spot Limo provides luxury transportation for all holiday celebrations 24/7. Call 630-290-1761.';
        return view('pages.services.wedding.holiday-parties', compact('pageTitle', 'metaDescription'));
    }

    public function independanceDayServices()
    {
        $pageTitle = 'Independence Day Limo Service';
        $metaDescription = 'Independence Day limo service across Chicago suburbs. Celebrate in style with Spot Limo luxury transportation. Call 630-290-1761.';
        return view('pages.services.wedding.independence-day', compact('pageTitle', 'metaDescription'));
    }

    public function newYearServices()
    {
        $pageTitle = 'New Year\'s Eve Limo Service';
        $metaDescription = "New Year's Eve limo service across Chicago suburbs. Celebrate safely with Spot Limo luxury transportation. Book early — NYE fills fast. Call 630-290-1761.";
        return view('pages.services.wedding.newyear-nights', compact('pageTitle', 'metaDescription'));
    }

    // ============================================================
    // HOURLY SERVICES
    // ============================================================

    public function hourlyBusiness()
    {
        $pageTitle = 'Hourly Business Limo Service';
        $metaDescription = 'Hourly business limo service across Chicago suburbs. Professional black car for multi-stop business trips & client entertainment. Call 630-290-1761.';
        return view('pages.services.hourly-services.business-trip', compact('pageTitle', 'metaDescription'));
    }

    public function hourlyFamily()
    {
        $pageTitle = 'Family Limo Service';
        $metaDescription = 'Hourly family limo service across Chicago suburbs. Spacious luxury vehicles for family gatherings and special occasions. Spot Limo. Call 630-290-1761.';
        return view('pages.services.hourly-services.family-get-together', compact('pageTitle', 'metaDescription'));
    }

    public function hourlySports()
    {
        $pageTitle = 'Sports Event Limo Service';
        $metaDescription = 'Sports event limo service from Chicago suburbs to Cubs, White Sox, Bulls, Bears & Blackhawks games. Spot Limo 24/7. Call 630-290-1761.';
        return view('pages.services.hourly-services.sports-event', compact('pageTitle', 'metaDescription'));
    }

    public function concerts()
    {
        $pageTitle = 'Concert Limo Service';
        $metaDescription = 'Concert limo service from Chicago suburbs. Spot Limo provides safe, stylish transportation to all Chicago area concerts & events 24/7. Call 630-290-1761.';
        return view('pages.services.hourly-services.concerts', compact('pageTitle', 'metaDescription'));
    }

    public function hourlyConventions()
    {
        $pageTitle = 'Convention Limo Service';
        $metaDescription = 'Convention & conference limo service across Chicago suburbs. Spot Limo provides professional group transportation 24/7. Call 630-290-1761.';
        return view('pages.services.hourly-services.conventions', compact('pageTitle', 'metaDescription'));
    }

    // ============================================================
    // INTERSTATE & SPECIALTY SERVICES
    // ============================================================

    public function interstateTransport()
    {
        $pageTitle = 'Interstate Transport';
        $metaDescription = 'Interstate limo service from Chicago suburbs to Milwaukee, Indianapolis, St. Louis & beyond. Spot Limo luxury long-distance travel. Call 630-290-1761.';
        return view('pages.services.interstate-transport', compact('pageTitle', 'metaDescription'));
    }

    public function sightSeeing()
    {
        $pageTitle = 'Sight Seeing Limo Service';
        $metaDescription = 'Chicago sightseeing limo tours from Chicago suburbs. Explore the city in luxury with Spot Limo professional chauffeurs. Call 630-290-1761.';
        return view('pages.services.interstate.sight-seeing', compact('pageTitle', 'metaDescription'));
    }

    public function luxuryCar()
    {
        $pageTitle = 'Luxury Car Service Chicago';
        $metaDescription = 'Luxury car service across 20 Chicago suburbs. Premium black sedans, SUVs & stretch limos by Spot Limo available 24/7. Call 630-290-1761.';
        return view('pages.services.interstate.luxury-car', compact('pageTitle', 'metaDescription'));
    }

    public function amenities()
    {
        $pageTitle = 'Limo Amenities';
        $metaDescription = 'Spot Limo luxury vehicle amenities — leather interiors, climate control, Wi-Fi & more across our Chicago suburb fleet. Call 630-290-1761.';
        return view('pages.services.interstate.amenities', compact('pageTitle', 'metaDescription'));
    }

    public function localAttraction()
    {
        $pageTitle = 'Local Attraction Tours';
        $metaDescription = 'Chicago area local attraction tours from Chicago suburbs. Spot Limo provides luxury transportation to all Chicagoland attractions. Call 630-290-1761.';
        return view('pages.services.interstate.local-attraction', compact('pageTitle', 'metaDescription'));
    }

    // ============================================================
    // FLEET & RATES
    // ============================================================

    public function vehicleRates()
    {
        $pageTitle = 'Vehicle Rates';
        $metaDescription = 'Spot Limo vehicle rates for black car & limo service across 20 Chicago suburbs. Flat rate pricing — no surge charges. Call 630-290-1761 for a quote.';
        $rates = VehicleType::where('is_enable', true)->get();
        return view('pages.vehicle-rates.index', compact('pageTitle', 'metaDescription', 'rates'));
    }

    public function ourFleet()
    {
        $pageTitle = 'Our Fleet';
        $metaDescription = 'Spot Limo luxury fleet — black sedans, SUVs, stretch limos & executive vans serving 20 Chicago suburbs 24/7. Call 630-290-1761.';
        return view('pages.vehicle-rates.our-fleet', compact('pageTitle', 'metaDescription'));
    }

    // ============================================================
    // LOCATION PAGES — ORIGINAL
    // ============================================================

    public function napervillePage()
    {
        $pageTitle = 'Limo Service Naperville IL';
        $metaDescription = "Spot Limo offers premium limo & black car service in Naperville IL. 24/7 O'Hare airport transfers, wedding limos & corporate car service. Call 630-290-1761.";
        return view('pages.locations.naperville', compact('pageTitle', 'metaDescription'));
    }

    public function oakBrookPage()
    {
        $pageTitle = 'Limo Service Oak Brook IL';
        $metaDescription = "Spot Limo provides luxury black car & limo service in Oak Brook IL. Corporate transportation, O'Hare airport transfers & wedding limos. Call 630-290-1761.";
        return view('pages.locations.oak-brook', compact('pageTitle', 'metaDescription'));
    }

    // ============================================================
    // LOCATION PAGES — BATCH 1
    // ============================================================

    public function schaumburgPage()
    {
        $pageTitle = 'Limo Service Schaumburg IL';
        $metaDescription = "Spot Limo offers premium limo & black car service in Schaumburg IL. 24/7 O'Hare airport transfers, corporate car service, wedding & prom limos. Call 630-290-1761.";
        return view('pages.locations.schaumburg', compact('pageTitle', 'metaDescription'));
    }

    public function hinsdalePage()
    {
        $pageTitle = 'Limo Service Hinsdale IL';
        $metaDescription = "Spot Limo provides luxury black car & limo service in Hinsdale IL. Discreet executive transportation, 24/7 O'Hare airport transfers & wedding limos. Call 630-290-1761.";
        return view('pages.locations.hinsdale', compact('pageTitle', 'metaDescription'));
    }

    public function elmhurstPage()
    {
        $pageTitle = 'Limo Service Elmhurst IL';
        $metaDescription = "Spot Limo offers premium limo & black car service in Elmhurst IL — 10 miles from O'Hare. 24/7 airport transfers, wedding limos & corporate car service. Call 630-290-1761.";
        return view('pages.locations.elmhurst', compact('pageTitle', 'metaDescription'));
    }

    public function downersGrovePage()
    {
        $pageTitle = 'Limo Service Downers Grove IL';
        $metaDescription = "Spot Limo provides premium limo & black car service in Downers Grove IL. 24/7 O'Hare airport transfers, corporate car service & wedding limos. Call 630-290-1761.";
        return view('pages.locations.downers-grove', compact('pageTitle', 'metaDescription'));
    }

    public function wheatonPage()
    {
        $pageTitle = 'Limo Service Wheaton IL';
        $metaDescription = "Spot Limo offers premium limo & black car service in Wheaton IL. 24/7 O'Hare airport transfers, wedding limos at Cantigny Park & corporate car service. Call 630-290-1761.";
        return view('pages.locations.wheaton', compact('pageTitle', 'metaDescription'));
    }

    public function lombardPage()
    {
        $pageTitle = 'Limo Service Lombard IL';
        $metaDescription = "Spot Limo provides premium limo & black car service in Lombard IL. 24/7 O'Hare airport transfers, wedding limos, prom & corporate car service. Call 630-290-1761.";
        return view('pages.locations.lombard', compact('pageTitle', 'metaDescription'));
    }

    public function burrRidgePage()
    {
        $pageTitle = 'Limo Service Burr Ridge IL';
        $metaDescription = "Spot Limo provides luxury black car & limo service in Burr Ridge IL. Discreet executive transportation, 24/7 airport transfers & white glove service. Call 630-290-1761.";
        return view('pages.locations.burr-ridge', compact('pageTitle', 'metaDescription'));
    }

    public function barringtonPage()
    {
        $pageTitle = 'Limo Service Barrington IL';
        $metaDescription = "Spot Limo offers premium limo & black car service in Barrington IL. 24/7 O'Hare airport transfers, wedding limos at Inverness & corporate car service. Call 630-290-1761.";
        return view('pages.locations.barrington', compact('pageTitle', 'metaDescription'));
    }

    public function bolingbrookPage()
    {
        $pageTitle = 'Limo Service Bolingbrook IL';
        $metaDescription = "Spot Limo provides premium limo & black car service in Bolingbrook IL. 24/7 O'Hare airport transfers, wedding limos at The Odyssey & corporate travel. Call 630-290-1761.";
        return view('pages.locations.bolingbrook', compact('pageTitle', 'metaDescription'));
    }

    public function auroraPage()
    {
        $pageTitle = 'Limo Service Aurora IL';
        $metaDescription = "Spot Limo offers premium limo & black car service in Aurora IL. 24/7 O'Hare & Midway airport transfers, wedding limos, prom & corporate car service. Call 630-290-1761.";
        return view('pages.locations.aurora', compact('pageTitle', 'metaDescription'));
    }

    // ============================================================
    // LOCATION PAGES — BATCH 2
    // ============================================================

    public function itascaPage()
    {
        $pageTitle = 'Limo Service Itasca IL';
        $metaDescription = "Spot Limo provides premium limo & black car service in Itasca IL — just 5 miles from O'Hare. 24/7 airport transfers, corporate car service & wedding limos. Call 630-290-1761.";
        return view('pages.locations.itasca', compact('pageTitle', 'metaDescription'));
    }

    public function rosellePage()
    {
        $pageTitle = 'Limo Service Roselle IL';
        $metaDescription = "Spot Limo offers premium limo & black car service in Roselle IL. 24/7 O'Hare airport transfers, wedding limos, prom & corporate car service. Call 630-290-1761.";
        return view('pages.locations.roselle', compact('pageTitle', 'metaDescription'));
    }

    public function carolStreamPage()
    {
        $pageTitle = 'Limo Service Carol Stream IL';
        $metaDescription = "Spot Limo provides premium limo & black car service in Carol Stream IL. 24/7 O'Hare airport transfers, wedding limos & corporate car service. Call 630-290-1761.";
        return view('pages.locations.carol-stream', compact('pageTitle', 'metaDescription'));
    }

    public function glenEllynPage()
    {
        $pageTitle = 'Limo Service Glen Ellyn IL';
        $metaDescription = "Spot Limo offers premium limo & black car service in Glen Ellyn IL. 24/7 O'Hare airport transfers, wedding limos, prom & corporate travel. Call 630-290-1761.";
        return view('pages.locations.glen-ellyn', compact('pageTitle', 'metaDescription'));
    }

    public function westmontPage()
    {
        $pageTitle = 'Limo Service Westmont IL';
        $metaDescription = "Spot Limo provides premium limo & black car service in Westmont IL. 24/7 O'Hare airport transfers, wedding limos & corporate car service. Call 630-290-1761.";
        return view('pages.locations.westmont', compact('pageTitle', 'metaDescription'));
    }

    public function clarendonHillsPage()
    {
        $pageTitle = 'Limo Service Clarendon Hills IL';
        $metaDescription = "Spot Limo provides luxury limo & black car service in Clarendon Hills IL. 24/7 O'Hare airport transfers, wedding limos & executive car service. Call 630-290-1761.";
        return view('pages.locations.clarendon-hills', compact('pageTitle', 'metaDescription'));
    }

    public function lislePage()
    {
        $pageTitle = 'Limo Service Lisle IL';
        $metaDescription = "Spot Limo offers premium limo & black car service in Lisle IL. Corporate car service, 24/7 O'Hare airport transfers, Morton Arboretum events & wedding limos. Call 630-290-1761.";
        return view('pages.locations.lisle', compact('pageTitle', 'metaDescription'));
    }

    public function willowbrookPage()
    {
        $pageTitle = 'Limo Service Willowbrook IL';
        $metaDescription = "Spot Limo provides premium limo & black car service in Willowbrook IL. 24/7 O'Hare airport transfers, wedding limos & corporate car service. Call 630-290-1761.";
        return view('pages.locations.willowbrook', compact('pageTitle', 'metaDescription'));
    }

    public function villaParkPage()
    {
        $pageTitle = 'Limo Service Villa Park IL';
        $metaDescription = "Spot Limo provides premium limo & black car service in Villa Park IL. 24/7 O'Hare airport transfers, wedding limos, prom & corporate car service. Call 630-290-1761.";
        return view('pages.locations.villa-park', compact('pageTitle', 'metaDescription'));
    }

    public function addisonPage()
    {
        $pageTitle = 'Limo Service Addison IL';
        $metaDescription = "Spot Limo offers premium limo & black car service in Addison IL — 10 miles from O'Hare. 24/7 airport transfers, wedding limos & corporate car service. Call 630-290-1761.";
        return view('pages.locations.addison', compact('pageTitle', 'metaDescription'));
    }
}