<style></style>

<script type="text/babel">
    import RangeSlider from 'vue-range-slider';
    import Modal from './Modal.vue';
    import 'vue-range-slider/dist/vue-range-slider.css';

    export default {
        data() {
            return {
                form: {
                    name: '',
                    phone: '',
                    email: '',
                    inquiry: '',
                    proposed_date: '',
                    function_type: null,
                    attendees: 150
                },
                errors: {
                    name: '',
                    phone: '',
                    email: '',
                    proposed_date: '',
                    inquiry: ''
                },
                showModal: false,
                sending: false,
                send_success: true
            }
        },

        computed: {
            button_txt() {
                return this.sending ? 'Sending...' : 'Submit';
            },

            notification_header() {
                const success = 'Thank You';
                const failure = 'Oh dear';

                return this.send_success ? success : failure;
            },

            notification_body() {
                const success = `Hi ${this.form.name}. Your message has been received, thank you very much. We will contact you as soon as we can.`;
                const failure = 'Sorry, there seems to be a problem sending the message. Please refresh the page an try again. Thanks.';

                return this.send_success ? success : failure;
            }
        },

        methods: {

            postForm() {
                this.clearValidationErrors();
                this.sending = true;
                this.$http.post('/contact', this.form)
                        .then(res => this.onSuccess())
                        .catch(err => this.handleErrors(err.response));
            },

            onSuccess() {
                this.send_success = true;
                this.showModal = true;
                this.sending = false;
            },

            clearModalAndForm() {
                this.resetForm();
                this.showModal = false;
            },

            handleErrors(err) {
                this.sending = false;
                if (err.status == 422) {
                    this.showValidationErrors(err);
                } else {
                    this.send_success = false;
                    this.showModal = true;
                }
            },

            showValidationErrors({data}) {
                Object.keys(this.errors).map(field => {
                    if (data.hasOwnProperty(field)) {
                        this.errors[field] = data[field][0];
                    }
                });
            },

            clearValidationErrors() {
                Object.keys(this.errors).map(field => this.errors[field] = '');
            },

            resetForm() {
                this.form = {
                    name: '',
                    phone: '',
                    email: '',
                    inquiry: '',
                    proposed_date: '',
                    function_type: null,
                    attendees: 150
                };
            }
        },
        components: {
            RangeSlider,
            Modal
        }
    }
</script>