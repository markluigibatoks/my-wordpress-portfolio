import SweetAlert from "./SweetAlert";

class FormContactUs {
    constructor(formSelector) {
        this.form = document.querySelector(formSelector);

        this.events();
        this.swal = new SweetAlert()
    }

    events() {
        this.form.addEventListener('submit', async (e) => {
            e.preventDefault();

            const formData = new FormData(this.form);

            try {
                const response = await fetch(siteData.root_url + '/wp-json/wp/v1/contact-us', {
                    method: 'POST',
                    headers: {
                        'X-WP-Nonce': siteData.nonce,
                    },
                    body: formData
                });

                const data = await response.json();

                if (!response.ok) {
                    const errorMessage = data.message || response.statusText || `HTTP error! status: ${response.status}`;
                    throw new Error(errorMessage);
                }
                
                this.swal.success({
                    title: 'Message Sent!',
                    text: 'Thank you for sending me a message! I will get back to you shortly.'
                })

                this.form.reset()
            } catch (error) {
                this.swal.error({
                    title: 'Oops!',
                    text: error.message
                })
            }
        });
    }
}

export default FormContactUs