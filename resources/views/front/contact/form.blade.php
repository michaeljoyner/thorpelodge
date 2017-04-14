<contact-form inline-template>
    <div class="component-inner">
        <form action="/contact" method="POST" @submit.stop.prevent="postForm">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" :class="{'has-error': errors.name}">
                <label for="name">Name&ast; </label>
                <span class="error-message" v-show="errors.name">@{{ errors.name }}</span>
                @if($errors->has('name'))
                    <span class="error-message">{{ $errors->first('name') }}</span>
                @endif
                <input type="text" name="name" value="{{ old('name') }}" v-model="form.name" class="form-control" >
            </div>
            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}" :class="{'has-error': errors.phone}">
                <label for="phone">Phone number&ast; </label>
                <span class="error-message" v-show="errors.phone">@{{ errors.phone }}</span>
                @if($errors->has('phone'))
                    <span class="error-message">{{ $errors->first('phone') }}</span>
                @endif
                <input type="text" name="phone" value="{{ old('phone') }}" v-model="form.phone" class="form-control">
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"  :class="{'has-error': errors.email}">
                <label for="email">Email&ast; </label>
                <span class="error-message" v-show="errors.email">@{{ errors.email }}</span>
                @if($errors->has('email'))
                    <span class="error-message">{{ $errors->first('email') }}</span>
                @endif
                <input type="email" name="email" value="{{ old('email') }}" v-model="form.email" class="form-control" >
            </div>
            <div class="form-group">
                <div class="radio-field">
                    <input type="radio" name="function_type" value="wedding" id="wedding_radio" v-model="form.function_type">
                    <label for="wedding_radio">
                        <span class="label-inner">Wedding</span>
                    </label>
                </div>
                <div class="radio-field">
                    <input type="radio" name="function_type" value="function" id="function_radio" v-model="form.function_type">
                    <label for="function_radio">
                        <span class="label-inner">Function</span>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label>Estimated amount of people </label>
                {{--<span class="slider-limit">20</span>--}}
                <range-slider class="slider"
                              min="10"
                              max="300"
                              step="1"
                              v-model="form.attendees"
                ></range-slider>
                <span class="slider-limit">@{{ form.attendees }}</span>
            </div>
            <div class="form-group{{ $errors->has('proposed_date') ? ' has-error' : '' }}" :class="{'has-error': errors.proposed_date}">
                <label for="proposed_date">Proposed date </label>
                <span class="error-message" v-show="errors.proposed_date">@{{ errors.proposed_date }}</span>
                @if($errors->has('proposed_date'))
                    <span class="error-message">{{ $errors->first('proposed_date') }}</span>
                @endif
                <input type="date" v-model="form.proposed_date" name="proposed_date" value="{{ old('proposed_date') ?? \Carbon\Carbon::now()->format('Y-m-d') }}" class="form-control">
            </div>
            <div class="form-group{{ $errors->has('inquiry') ? ' has-error' : '' }}" :class="{'has-error': errors.inquiry}">
                <label for="inquiry">Tell us about your Wedding or Function </label>
                <span class="error-message" v-show="errors.inquiry">@{{ errors.inquiry }}</span>
                @if($errors->has('inquiry'))
                    <span class="error-message">{{ $errors->first('inquiry') }}</span>
                @endif
                <textarea name="inquiry" v-model="form.inquiry" class="form-control">{{ old('inquiry') }}</textarea>
            </div>
            <div class="form-group">
                <button :class="{'waiting': sending}"
                        type="submit"
                        class="action-button centered"
                        v-text="button_txt"
                        :disabled="sending"
                >Submit</button>
            </div>
        </form>
        <modal :show="showModal">
            <div slot="header">
                <h3>@{{ notification_header }}</h3>
            </div>
            <div slot="body">
                <p class="centered-text">@{{ notification_body }}</p>
            </div>
            <div slot="footer">
                <button class="action-button centered" @click="clearModalAndForm">
                Okay
                </button>
            </div>
        </modal>
    </div>
</contact-form>