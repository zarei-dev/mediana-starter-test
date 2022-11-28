import Main from './classes/Main'
new Main()
window.onload = function() {
    const tabs = document.getElementsByClassName('sms-tab');
    if (tabs.length > 0) {
        for (let i = 0; i < tabs.length; i++) {
            tabs[i].addEventListener('click', function() {
                // Show the tab content
                const tabId = this.getAttribute('data-tab');
                const tabContent = document.getElementsByClassName('sms-code');
                for (let j = 0; j < tabContent.length; j++) {
                    tabContent[j].classList.remove('active');
                }
                document.getElementById(`sms-data-${tabId}`).classList.add('active');

                // Change the active tab
                for (let j = 0; j < tabs.length; j++) {
                    tabs[j].classList.remove('active-tab');
                }
                this.classList.add('active-tab');
            });
        }
    }
}