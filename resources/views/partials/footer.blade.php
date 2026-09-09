<div class="page-footer">
    <footer class="container mx-auto flex flex-col justify-items-center text-sm leading-6 mt-24 mb-4 text-slate-700 dark:text-slate-200">

        <p class="powered-by footer-license-icons text-center pb-2">
            <a class="inline-flex items-center justify-center gap-2 align-middle text-2xl" href="{{ config('portfolio.footer.license_url') }}" rel="noopener noreferrer" target="_blank" aria-label="Creative Commons">
                <i class="fa-brands fa-creative-commons" aria-hidden="true"></i>
                <i class="fa-brands fa-creative-commons-by" aria-hidden="true"></i>
                <i class="fa-brands fa-creative-commons-nc" aria-hidden="true"></i>
                <i class="fa-brands fa-creative-commons-nd" aria-hidden="true"></i>
            </a>
        </p>

        <p class="powered-by text-center">
            {{ str_replace(['{year}', '{name}'], [now()->year, config('portfolio.name')], config('portfolio.footer.notice')) }}
            <a href="{{ config('portfolio.footer.license_url') }}" rel="noopener noreferrer" target="_blank">{{ config('portfolio.footer.license') }}</a>
        </p>

        <p class="powered-by text-center text-sm opacity-80 py-1">
            {{ config('portfolio.footer.credit') }}
        </p>
    </footer>
</div>