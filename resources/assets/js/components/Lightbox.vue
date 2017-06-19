<style>

</style>

<template>
    <div class="dd-lightbox card-image-holder" :class="{'open': open}">
        <div class="close-lightbox-btn" @click="open = false">&times;</div>
        <div class="social-sharing-options">
            <a :href="pinterest_link" target="_blank">
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.76 26.81">
                    <title>pinterest</title>
                    <path fill="#fff"
                          d="M11,0C3.69,0,0,5.25,0,9.62c0,2.65,1,5,3.15,5.88a.53.53,0,0,0,.77-.38c.07-.27.24-1,.31-1.24A.75.75,0,0,0,4,13a4.44,4.44,0,0,1-1-3,7.29,7.29,0,0,1,7.58-7.38c4.14,0,6.41,2.53,6.41,5.9,0,4.44-2,8.19-4.88,8.19a2.38,2.38,0,0,1-2.43-3C10.14,11.8,11,9.7,11,8.29A2.06,2.06,0,0,0,9,6c-1.65,0-3,1.7-3,4a5.92,5.92,0,0,0,.49,2.44l-2,8.39a17.29,17.29,0,0,0,0,5.85.21.21,0,0,0,.37.09,16.43,16.43,0,0,0,2.78-5c.19-.68,1.08-4.23,1.08-4.23a4.41,4.41,0,0,0,3.76,1.92c5,0,8.31-4.51,8.31-10.55C20.76,4.26,16.89,0,11,0"/>
                </svg>
            </a>
            <a :href="facebook_link" target="_blank">
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.92 26.81">
                    <title>facebook</title>
                    <path fill="#fff"
                          d="M9,26.81V14.58h4.1l.61-4.77H9v-3c0-1.38.38-2.32,2.36-2.32h2.52V.19A33.73,33.73,0,0,0,10.25,0C6.61,0,4.12,2.22,4.12,6.3V9.82H0v4.77H4.12V26.81Z"/>
                </svg>
            </a>
        </div>
        <div class="lightbox-content">
            <img :src="mainSrc" alt="" @click="open = true" v-show="!open">
            <div class="main-lightbox-gallery" v-show="open">
                <transition v-for="(image, index) in galleryImages" name="slide-fade" :key="image.src">
                    <img :src="image.src" :alt="title + ' image'" v-show="current_pos == index">
                </transition>
            </div>
            <div class="lightbox-nav-arrow dd-prev-arrow" @click="showPrev"
                 v-show="open && (galleryImages.length > 1)">
                <svg width="30px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 143.9 258.48">
                    <polyline fill="none" stroke="#ffffff" stroke-miterlimit="10" stroke-width="20px"
                              points="135.79 251.41 14.14 129.75 136.83 7.07"/>
                </svg>
            </div>
            <div class="dd-next-arrow lightbox-nav-arrow" @click="showNext"
                 v-show="open && (galleryImages.length > 1)">
                <svg width="30px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 143.9 258.48">
                    <polyline fill="none" stroke="#ffffff" stroke-miterlimit="10" stroke-width="20px" class="cls-1"
                              points="8.11 7.07 129.75 128.72 7.07 251.41"/>
                </svg>
            </div>
            <p class="lightbox-img-name" v-show="open">{{ galleryImages[current_pos].src.slice(19,-4) }}</p>
        </div>
        <p class="display-title" @click="open = true" v-show="!open">{{ title }}</p>
    </div>
</template>

<script type="text/babel">
    export default {
        props: ['title', 'main-src', 'gallery-images', 'page-url', 'base-url'],

        data() {
            return {
                open: false,
                current_pos: 0
            }
        },

        computed: {
            current_source() {
                return this.galleryImages[this.current_pos].src;
            },

            pinterest_link() {
                const base = 'https://pinterest.com/pin/create/button/?';
                const query = `url=${this.pageUrl}&media=${this.baseUrl + this.current_source}&description=Amazing wedding photo`;

                return base + encodeURIComponent(query);

            },

            facebook_link() {
                const base = 'https://www.facebook.com/sharer/sharer.php?u=';
                const image = this.baseUrl + this.current_source;

                return base + encodeURIComponent(image);
            }
        },

        mounted() {
            eventHub.$on('escaped', () => this.open = false);
            eventHub.$on('keyed:left', () => this.showPrev());
            eventHub.$on('keyed:right', () => this.showNext());
        },

        methods: {

            showPrev() {
                if (this.current_pos > 0) {
                    return this.current_pos--;
                }

                return this.current_pos = this.galleryImages.length - 1;
            },

            showNext() {
                if (this.current_pos < this.galleryImages.length - 1) {
                    return this.current_pos++;
                }

                return this.current_pos = 0;
            }
        }
    }
</script>