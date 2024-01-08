document.addEventListener('DOMContentLoaded', () => {
    'use strict';
    
    // TABS
    const tabsBtn = document.querySelectorAll('.tabs__item');
    const tabsContent = document.querySelectorAll('.content__item');

    for (const tabBtn of tabsBtn) {
        tabBtn.addEventListener('click', () => {
            const dataTabs = +tabBtn.dataset.tabs;
            for (const tabBtn of tabsBtn) {
                tabBtn.classList.remove('tabs--active');
            }
            tabBtn.classList.add('tabs--active');
            switchContent(dataTabs);
        });
    }

    function switchContent(dataTabs) {
        for (const tabContent of tabsContent) {
            const dataContent = +tabContent.dataset.content;
            dataTabs === dataContent ? tabContent.classList.add('content--active') : tabContent.classList.remove('content--active');
        }
    }
    // TABS

});