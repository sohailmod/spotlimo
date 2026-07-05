(function() {
  const isSubpage = location.pathname !== '/' && location.pathname !== '/index.html';

  function normalizePath(pathname) {
    return pathname
      .replace(/^\/pages\//, '/')
      .replace(/\/index\.html$/, '/')
      .replace(/\.html$/, '')
      .replace(/\/+$/, '/') || '/';
  }

  function humanizeSlug(slug) {
    return slug
      .replace(/^\//, '')
      .replace(/-/g, ' ')
      .replace(/\b\w/g, letter => letter.toUpperCase())
      .replace(/Ohare/gi, "O'Hare")
      .replace(/Midway Signature Airport/gi, 'Midway Signature Airport')
      .replace(/Gary International/gi, 'Gary International');
  }

  function cityFromSlug(slug) {
    return slug
      .replace(/^\/?limo-service-/, '')
      .replace(/-il$/, '')
      .split('-')
      .map(part => part.charAt(0).toUpperCase() + part.slice(1))
      .join(' ')
      .replace(/Glen Ellyn/, 'Glen Ellyn')
      .replace(/Carol Stream/, 'Carol Stream')
      .replace(/Villa Park/, 'Villa Park')
      .replace(/Burr Ridge/, 'Burr Ridge')
      .replace(/Oak Brook/, 'Oak Brook')
      .replace(/Downers Grove/, 'Downers Grove')
      .replace(/Clarendon Hills/, 'Clarendon Hills');
  }

  function buildSectionList(items) {
    return items.map(item => `<li>${item}</li>`).join('');
  }

  function buildLegacyPageData(pathname) {
    const path = normalizePath(pathname);
    const slug = path.replace(/^\//, '').replace(/\/$/, '');

    const backendPages = {
      'confirm-reservations': 'Reservation Confirmation',
      'complete-reservations': 'Reservation Completion',
      'payment-confirm': 'Payment Confirmation',
      'payment/cancel': 'Payment Cancelled'
    };

    if (slug.startsWith('limo-service-')) {
      const city = cityFromSlug(slug);
      return {
        title: `Limo Service ${city}, IL`,
        eyebrow: 'Location Coverage',
        summary: `Spot Limo provides polished black car and limousine service for ${city} and nearby Illinois suburbs with punctual chauffeurs, discreet rides, and modern vehicles.`,
        paragraphs: [
          `Whether the trip starts at a hotel, a residence, or a business district, our ${city} service is structured around clean communication, reliable pickup windows, and a calm in-car experience.`,
          'These location pages highlight the same Spot Limo standard: professional chauffeurs, transparent coordination, and a fleet designed for airport transfers, weddings, corporate travel, and special events.',
          `For travelers planning around ${city} traffic, flight schedules, or event timelines, we keep the ride efficient and elegant from the first mile to the last.`
        ],
        bullets: [
          'Airport transfers and curbside pickup',
          'Corporate travel and meeting transportation',
          'Wedding and special-event rides',
          'Late-model sedans, SUVs, and limousines'
        ],
        ctaText: 'Book Now',
        ctaHref: '/#bookingBlock',
        secondaryText: 'Call Us 630-290-1761',
        secondaryHref: 'tel:+16302901761'
      };
    }

    if (slug === 'multilingual-chauffeurs-services' || slug === 'multilingual-chauffeur-services') {
      return {
        title: 'Multilingual Chauffeur Services',
        eyebrow: 'Chauffeur Service',
        summary: 'Professional chauffeurs who communicate clearly with international guests, executives, and event travelers.',
        paragraphs: [
          'Spot Limo’s multilingual chauffeur service helps guests feel welcomed, informed, and fully supported from pickup to drop-off. The result is a smoother ride for travelers who prefer to communicate in more than one language.',
          'Our chauffeurs are selected for professionalism, route knowledge, and polished service standards, making this a strong fit for corporate delegations, weddings, airport arrivals, and private occasions.',
          'When timing matters, clear communication matters just as much. We coordinate each reservation carefully so the ride feels calm, discreet, and easy to trust.'
        ],
        bullets: [
          'International guest support',
          'Airport and hotel transfers',
          'Corporate and event coordination',
          'Private, discreet chauffeur service'
        ],
        ctaText: 'Book Now',
        ctaHref: '/#bookingBlock',
        secondaryText: 'Call Us 630-290-1761',
        secondaryHref: 'tel:+16302901761'
      };
    }

    const airportTitles = {
      'ohare-airport': "O'Hare Airport Transportation",
      'midway-signature': 'Midway Signature Airport Transportation',
      'milwaukee-airport': 'Milwaukee International Airport Transportation',
      'dupage-airport': 'DuPage Airport Transportation',
      'chicago-airport': 'Chicago Executive Airport Transportation',
      'gary-international': 'Gary International Airport Transportation'
    };

    if (airportTitles[slug]) {
      const airportName = airportTitles[slug];
      return {
        title: airportName,
        eyebrow: 'Airport Transfers',
        summary: `Reliable ${airportName.toLowerCase()} with flight-aware timing, polished chauffeurs, and luxury vehicles ready when your schedule changes.`,
        paragraphs: [
          `Spot Limo handles ${airportName.toLowerCase()} with careful flight monitoring, courteous curbside pickup, and smooth drop-off planning for business travelers, families, and visiting guests.`,
          'Our airport service is designed to reduce friction around busy terminals, delayed flights, and early-morning departures by keeping dispatch communication clear and responsive.',
          'Choose a sedan, SUV, or limousine when you want the ride itself to feel organized, quiet, and professionally managed from door to door.'
        ],
        bullets: [
          'Flight tracking and schedule coordination',
          'Meet-and-greet and curbside pickup options',
          'Sedans, SUVs, and limousines',
          '24/7 airport transportation support'
        ],
        ctaText: 'Book Airport Ride',
        ctaHref: '/#bookingBlock',
        secondaryText: 'Call Us 630-290-1761',
        secondaryHref: 'tel:+16302901761'
      };
    }

    const chauffeurTitles = {
      'chauffeur-services': 'Reasonable Chauffeur Services',
      'chauffeur-services-chicago': 'Chauffeur Services Chicago',
      'chauffeur-services-major': 'Chauffeur Services Major',
      'chauffeur-services-midway': 'Midway Chauffeur Services',
      'chauffeur-services-ohare': "O'Hare Chauffeur Services",
      'chauffeur-services-corporate': 'Corporate Chauffeur Services'
    };

    if (chauffeurTitles[slug]) {
      const title = chauffeurTitles[slug];
      return {
        title,
        eyebrow: 'Professional Chauffeurs',
        summary: 'Polished chauffeur service for airport transfers, meetings, private outings, and city travel.',
        paragraphs: [
          `Our ${title.toLowerCase()} page is built for clients who want a dependable driver, a clean vehicle, and a predictable experience in every season.`,
          'Spot Limo combines route planning, courteous service, and clear communication so clients can focus on the appointment, event, or arrival instead of the traffic.',
          'For executives, families, and visiting guests, the difference is in the details: quiet cabins, punctual arrivals, and a chauffeur who understands how to manage the ride with professionalism.'
        ],
        bullets: [
          'Hourly and point-to-point chauffeur service',
          'Corporate, airport, and special-event travel',
          'Professional attire and courteous service',
          'Flexible reservations and dispatch support'
        ],
        ctaText: 'Call Us Today',
        ctaHref: 'tel:+16302901761',
        secondaryText: 'Book Now',
        secondaryHref: '/#bookingBlock'
      };
    }

    const corporateTitles = {
      'corporate-transport': 'Corporate Transport',
      'corporate-travel': 'Corporate Travel',
      'corporate-limo-contract': 'Corporate Limo Contract',
      'meet-greet': 'Meet and Greet Service',
      'tracking-services': 'Tracking Services',
      'white-glove': 'White Glove Service',
      'executive-transport': 'Executive Transport'
    };

    if (corporateTitles[slug]) {
      const title = corporateTitles[slug];
      return {
        title,
        eyebrow: 'Executive Travel',
        summary: 'Business-friendly ground transportation with a polished experience for teams, clients, and VIP guests.',
        paragraphs: [
          `Spot Limo’s ${title.toLowerCase()} service supports corporate schedules with dependable pickups, professional chauffeurs, and vehicles suited for everyday business travel.`,
          'We can coordinate recurring rides, airport transfers, and client-facing reservations so your transportation reflects the same care your company gives to every other detail.',
          'From white-glove meet-and-greet service to simple point-to-point travel, the goal is the same: keep the ride organized, discreet, and efficient.'
        ],
        bullets: [
          'Executive transfers and client pickups',
          'Recurring corporate reservations',
          'Meet-and-greet support',
          'Discreet white-glove service'
        ],
        ctaText: 'Reserve Corporate Ride',
        ctaHref: '/#bookingBlock',
        secondaryText: 'Call Us 630-290-1761',
        secondaryHref: 'tel:+16302901761'
      };
    }

    const eventTitles = {
      'wedding-transport': 'Wedding Transportation',
      'wedding-services': 'Wedding Services',
      'prom-nights': 'Prom Nights',
      'holiday-parties': 'Holiday Parties',
      'independence-day': 'Independence Day Celebrations',
      'newyear-nights': "New Year\'s Night Out"
    };

    if (eventTitles[slug]) {
      const title = eventTitles[slug];
      return {
        title,
        eyebrow: 'Special Occasions',
        summary: 'Elegant transportation for milestone events, formal gatherings, and carefully planned celebration nights.',
        paragraphs: [
          `Spot Limo’s ${title.toLowerCase()} service is designed to keep the logistics simple while the celebration stays front and center.`,
          'Whether the evening calls for a wedding timeline, a prom arrival, or a festive group outing, our team keeps every pickup and drop-off aligned with the event plan.',
          'With polished vehicles, courteous chauffeurs, and clear communication, guests can enjoy the ride and arrive with confidence.'
        ],
        bullets: [
          'On-time arrivals and planned departures',
          'Elegant sedans, SUVs, and limousines',
          'Wedding, prom, and party coordination',
          'Flexible pickup planning for groups'
        ],
        ctaText: 'Plan Your Ride',
        ctaHref: '/#bookingBlock',
        secondaryText: 'Call Us 630-290-1761',
        secondaryHref: 'tel:+16302901761'
      };
    }

    const hourlyTitles = {
      'business-trip': 'Business Trip Transportation',
      'family-get-together': 'Family Get Together Transportation',
      'sports-event': 'Sports Event Transportation',
      'concerts': 'Concert Transportation',
      'conventions': 'Convention Transportation'
    };

    if (hourlyTitles[slug]) {
      const title = hourlyTitles[slug];
      return {
        title,
        eyebrow: 'Hourly Service',
        summary: 'Flexible transportation for meetings, gatherings, events, and full-day itineraries that need responsive local service.',
        paragraphs: [
          `Our ${title.toLowerCase()} option gives riders the freedom to plan around meetings, gatherings, and event schedules without worrying about parking or ride delays.`,
          'When your day has multiple stops, Spot Limo keeps the vehicle and chauffeur ready so you can focus on the itinerary instead of the logistics.',
          'This is a practical choice for families, groups, and business travelers who want a polished hourly reservation with predictable service.'
        ],
        bullets: [
          'Flexible hourly reservations',
          'Multiple stops in one itinerary',
          'Ideal for groups and business travel',
          'Comfortable luxury vehicles'
        ],
        ctaText: 'Reserve Hourly Service',
        ctaHref: '/#bookingBlock',
        secondaryText: 'Call Us 630-290-1761',
        secondaryHref: 'tel:+16302901761'
      };
    }

    const interstateTitles = {
      'interstate-transport': 'Interstate Transportation',
      'sight-seeing': 'Sight Seeing Tours',
      'luxury-car': 'Luxury Car Charter',
      'amenities': 'Luxury Amenities',
      'local-attraction': 'Local Attraction Service'
    };

    if (interstateTitles[slug]) {
      const title = interstateTitles[slug];
      return {
        title,
        eyebrow: 'Interstate & Specialty',
        summary: 'Comfort-first transportation for longer rides, scenic outings, and premium travel experiences.',
        paragraphs: [
          `Spot Limo’s ${title.toLowerCase()} service is ideal when the trip extends beyond a quick pickup and you want the ride to stay comfortable, elegant, and coordinated.`,
          'For scenic outings, local attractions, and longer interstate drives, we prioritize smooth routing, vehicle comfort, and professional chauffeur service.',
          'The goal is to make every mile feel dependable and refined, whether the trip is business, leisure, or a special occasion.'
        ],
        bullets: [
          'Long-distance comfort and route planning',
          'Premium vehicles for scenic travel',
          'Local attractions and leisure rides',
          'Professional chauffeur support'
        ],
        ctaText: 'Plan Your Trip',
        ctaHref: '/#bookingBlock',
        secondaryText: 'Call Us 630-290-1761',
        secondaryHref: 'tel:+16302901761'
      };
    }

    if (slug.startsWith('show-blog')) {
      return {
        title: 'Spot Limo Blog Article',
        eyebrow: 'Insights',
        summary: 'Helpful guidance for airport transfers, event planning, and premium ground transportation.',
        paragraphs: [
          'Spot Limo blog articles share practical advice for travelers who want a smoother planning process and a more polished ride experience.',
          'Use this article-style layout for service tips, seasonal travel guidance, and reminders about how to coordinate black car service with airport or event timing.',
          'The focus is always the same: clear planning, dependable chauffeurs, and a calm ride that fits the rest of the trip.'
        ],
        bullets: [
          'Travel planning tips and service guidance',
          'Airport and event coordination advice',
          'Premium transportation best practices',
          'Spot Limo booking and service reminders'
        ],
        ctaText: 'Browse Blogs',
        ctaHref: '/our-blogs',
        secondaryText: 'Call Us 630-290-1761',
        secondaryHref: 'tel:+16302901761'
      };
    }

    if (backendPages[slug]) {
      const title = backendPages[slug];
      return {
        title,
        eyebrow: 'Booking Flow',
        summary: 'Reservation status information for customers who just completed or cancelled a booking step.',
        paragraphs: [
          'This page is part of the reservation workflow and confirms the next step after a booking or payment event.',
          'If you were expecting a live support response, Spot Limo’s team can still help with booking questions, vehicle selection, and schedule adjustments.',
          'For the fastest response, use the booking form or call the office directly so the team can review the reservation details with you.'
        ],
        bullets: [
          'Review reservation status',
          'Confirm next step with support',
          'Call for immediate assistance',
          'Return to the booking form'
        ],
        ctaText: 'Back to Home',
        ctaHref: '/',
        secondaryText: 'Call Us 630-290-1761',
        secondaryHref: 'tel:+16302901761'
      };
    }

    return {
      title: humanizeSlug(slug || 'Spot Limo'),
      eyebrow: 'Spot Limo',
      summary: 'Legacy route preserved as part of the static migration.',
      paragraphs: [
        'This page has been migrated into the static Spot Limo build with the shared site header, footer, and on-brand styling.',
        'If you need a more specific route or service page, use the navigation above or the booking form on the homepage to continue.',
        'The layout is intentionally consistent so users always see the same trusted Spot Limo experience across the site.'
      ],
      bullets: [
        'Shared header and footer',
        'Consistent Spot Limo styling',
        'Booking and call support',
        'Clean route handling'
      ],
      ctaText: 'Back to Home',
      ctaHref: '/',
      secondaryText: 'Call Us 630-290-1761',
      secondaryHref: 'tel:+16302901761'
    };
  }

  function renderLegacyStubPage() {
    const shell = document.querySelector('.shell');
    if (!shell || !/static migration/i.test(shell.textContent)) {
      return;
    }

    const page = buildLegacyPageData(location.pathname);
    if (!page) {
      return;
    }

    document.title = `${page.title} | Spot Limo`;

    const pageWrapper = document.createElement('main');
    pageWrapper.className = 'legacy-page';
    pageWrapper.innerHTML = `
      <section class="legacy-hero">
        <p class="legacy-kicker">${page.eyebrow}</p>
        <h1>${page.title}</h1>
        <p class="legacy-summary">${page.summary}</p>
        <div class="legacy-actions">
          <a class="legacy-btn legacy-btn-primary" href="${page.ctaHref}">${page.ctaText}</a>
          <a class="legacy-btn legacy-btn-secondary" href="${page.secondaryHref}">${page.secondaryText}</a>
        </div>
      </section>
      <section class="legacy-content">
        <article class="legacy-panel legacy-panel--wide">
          <h2>Service Overview</h2>
          ${page.paragraphs.map(paragraph => `<p>${paragraph}</p>`).join('')}
        </article>
        <aside class="legacy-panel">
          <h2>What to Expect</h2>
          <ul class="legacy-list">
            ${buildSectionList(page.bullets)}
          </ul>
        </aside>
      </section>
    `;

    shell.replaceWith(pageWrapper);
  }

  function ensureStylesheet() {
    if (!document.querySelector('link[data-shared-layout-css]')) {
      const link = document.createElement('link');
      link.rel = 'stylesheet';
      link.href = '/shared/shared-layout.css?v=3';
      link.setAttribute('data-shared-layout-css', 'true');
      document.head.appendChild(link);
    }
  }

  // Start fetching shared CSS immediately to reduce first-paint shifts.
  ensureStylesheet();

  async function loadFragment(url) {
    const response = await fetch(url, { cache: 'no-cache' });
    return response.text();
  }

  function replaceWithHTML(target, html, options = {}) {
    if (!target) {
      if (options.fallback === 'prepend') {
        document.body.insertAdjacentHTML('afterbegin', html.trim());
      } else if (options.fallback === 'append') {
        document.body.insertAdjacentHTML('beforeend', html.trim());
      }
      return;
    }
    const template = document.createElement('template');
    template.innerHTML = html.trim();
    const nodes = Array.from(template.content.childNodes);
    const parent = target.parentNode;
    nodes.forEach(node => parent.insertBefore(node, target));
    parent.removeChild(target);
  }

  function wireDropdowns() {
    document.querySelectorAll('.dropdown-wrp > .nav-link, .dropdown-wrp > .down-arrow').forEach(trigger => {
      trigger.addEventListener('click', event => {
        if (window.matchMedia('(max-width: 767px)').matches) {
          event.preventDefault();
          const wrapper = trigger.closest('.dropdown-wrp');
          wrapper.classList.toggle('is-open');
          document.querySelectorAll('.dropdown-wrp.is-open').forEach(openItem => {
            if (openItem !== wrapper) openItem.classList.remove('is-open');
          });
        }
      });
    });

    document.addEventListener('click', event => {
      if (!event.target.closest('.dropdown-wrp')) {
        document.querySelectorAll('.dropdown-wrp.is-open').forEach(openItem => openItem.classList.remove('is-open'));
      }
    });
  }

  document.addEventListener('DOMContentLoaded', async () => {
    ensureStylesheet();
    if (isSubpage) {
      document.body.classList.add('site-subpage');
    }

    // Keep homepage header/footer static to avoid post-load replacement jumps.
    if (!isSubpage) {
      return;
    }

    try {
      const [headerHTML, footerHTML] = await Promise.all([
        loadFragment('/shared/header.html'),
        loadFragment('/shared/footer.html')
      ]);

      const currentHeader = document.querySelector('nav.main-navbar');
      const currentFooter = document.querySelector('footer');

      replaceWithHTML(currentHeader, headerHTML, { fallback: 'prepend' });
      replaceWithHTML(currentFooter, footerHTML, { fallback: 'append' });

      wireDropdowns();
      renderLegacyStubPage();
    } catch (error) {
      console.error('Shared layout failed to load', error);
    }
  });
})();