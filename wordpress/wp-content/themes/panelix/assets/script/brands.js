(function () {
    'use strict';

    function renderBrands(grid, brands, layout) {
        grid.innerHTML = '';

        if (!brands.length) return;

        // header uses <ul><li> structure
        var useListItem = (grid.tagName === 'UL');

        brands.forEach(function (brand) {
            var el = document.createElement(useListItem ? 'li' : 'div');

            if (layout === 'brands') {
                el.className = 'bg-white border border-dark/10 rounded-xl clamp-[p,16px,24px] flex flex-col clamp-[gap,12px,16px] lg:transition-all lg:duration-300 lg:hover:border-secondary lg:hover:shadow-[0_10px_30px_rgba(30,64,175,0.08)]';

                var inner = '';

                if (brand.logo) {
                    inner += '<img src="' + brand.logo + '" alt="' + brand.title + '" loading="lazy" class="h-10 w-auto object-contain">';
                }

                inner += '<h3 class="clamp-[text,18px,22px] font-semibold tracking-[-0.22px] text-dark">' + brand.title + '</h3>';

                if (brand.description) {
                    inner += '<p class="text-[16px] leading-[1.8] font-medium tracking-[-0.08px] text-text flex-1">' + brand.description + '</p>';
                }

                if (brand.url) {
                    inner += '<a href="' + brand.url + '" class="w-fit inline-flex items-center gap-4 border-b border-dark pb-1.25 text-[16px] font-medium text-dark lg:hover:text-secondary lg:hover:border-secondary transition-colors duration-300">Detayları İncele <i class="icon-arrow-right text-[16px] h-4"></i></a>';
                }

                el.innerHTML = inner;

            } else {
                // index / service-detail: compact logo card
                el.className = 'bg-white border border-dark/10 rounded-xl clamp-[p,12px,20px] flex items-center justify-center lg:transition-all lg:duration-300 lg:hover:border-secondary';

                var compactInner = '';

                if (brand.logo) {
                    var tag = brand.url ? 'a' : 'div';
                    compactInner += '<' + tag + (brand.url ? ' href="' + brand.url + '"' : '') + ' class="flex items-center justify-center w-full h-full">';
                    compactInner += '<img src="' + brand.logo + '" alt="' + brand.title + '" loading="lazy" class="max-h-10 w-auto max-w-full object-contain">';
                    compactInner += '</' + tag + '>';
                } else {
                    // text fallback if no logo
                    var tTag = brand.url ? 'a' : 'span';
                    compactInner += '<' + tTag + (brand.url ? ' href="' + brand.url + '"' : '') + ' class="text-[16px] font-semibold text-dark text-center leading-tight">' + brand.title + '</' + tTag + '>';
                }

                el.innerHTML = compactInner;
            }

            grid.appendChild(el);
        });
    }

    function loadGrid(grid) {
        var src    = grid.getAttribute('data-brands-src');
        var layout = grid.getAttribute('data-brands-layout') || 'index';

        if (!src) return;

        var url = src + (src.indexOf('?') > -1 ? '&' : '?') + 'layout=' + encodeURIComponent(layout);

        fetch(url)
            .then(function (r) { return r.json(); })
            .then(function (data) {
                if (data && Array.isArray(data.brands)) {
                    renderBrands(grid, data.brands, layout);
                }
            })
            .catch(function () { /* keep loading placeholder */ });
    }

    document.addEventListener('DOMContentLoaded', function () {
        var grids = document.querySelectorAll('[data-brands-grid]');
        grids.forEach(loadGrid);
    });
}());
