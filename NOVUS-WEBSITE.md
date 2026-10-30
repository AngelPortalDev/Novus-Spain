# Novus Education website

The original template homepage, page URLs, header, footer, slider, stylesheets and scripts are restored. Existing template URLs render directly without redirects. Additional Novus pages use the original shared header, footer, breadcrumb and template styling; the redesigned novus.css and novus.js are not loaded.

## Preview

Run `php artisan serve --host=127.0.0.1 --port=8014` and visit http://127.0.0.1:8014.

## Page coverage

- Home and searchable programme catalogue.
- Seven higher education categories and 69 individual programme pages.
- English School and six individual language course pages.
- Digital Campus, About, Our Team, Work with Us, Accreditations and Erasmus+.
- Student Life, Study in Spain, Visa Requirements, Admissions and Tuition Fees.
- Contact, Study with Us, News & Events, Newsletters, Terms & Conditions and Privacy Policy.

Structure and programme URL inventory reviewed against https://www.ascenciamalta.edu.mt/ and https://www.ascenciamalta.edu.mt/programmes on 9 September 2026. Duplicate whitespace URLs and a duplicate artificial-intelligence link were consolidated. Descriptive text is newly written for this preview.

Ascencia's historical news articles, staff biographies, testimonials, accreditations, fees, Maltese immigration rules and third-party admissions platform have not been presented as Novus Education facts. The news and newsletter sections have honest empty states until school content is supplied. Individual programme specifications also await confirmed Novus information; these are indicative pages, not approved course offers.

## Content editing

- `config/novus.php`: categories, English courses and school page copy.
- `resources/data/programmes.json`: individual programme titles and URLs.
- `resources/views/novus/`: shared layout and page components.
- `public/assets/css/style.css`: original template styling (unchanged).
- `public/assets/js/main.js`: original template interactions (unchanged).

## Enquiries

Forms validate on the server, require consent, reject unknown programme values and include rate limiting and a honeypot. Successful submissions save an encrypted record under `storage/app/private/novus-enquiries/<uuid>.enc`. They do not email anyone. Use sample information while reviewing. Records can be read locally with Laravel's `Crypt::decryptString`; preserve the application key while retained records are needed.

Before public launch, supply the school's legal identity, city/address, contact details, approved programme catalogue and specifications, recognition records, staff information, privacy/retention terms, admissions workflow and school photography. Connect the intended admissions destination and update form/privacy copy together. The layout deliberately includes `noindex, nofollow` while these details are pending.

## Verification

`php artisan test --compact`: 6 tests, 619 assertions covering original URLs without redirects, additional pages, search and filtering, missing pages, validation and encrypted enquiry storage.

`php artisan view:cache`: Blade compilation passed.

`tools/browser-check.cjs`: Chrome/Playwright verifies the original homepage slider, absence of redesigned styles, programme search and the original mobile menu. Set `PLAYWRIGHT_MODULE` to an installed Playwright package when running outside this machine. Screenshots are written to `storage/app/preview/`.
