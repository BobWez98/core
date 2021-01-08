<h1 class="font-bold text-4xl mb-5">@lang('Credentials')</h1>

<form class="lg:w-2/3" v-on:submit.prevent="save(['credentials'], 3)">
    <div class="grid grid-cols-12 gap-4 mb-3">
        <div class="col-span-12 sm:col-span-6">
            <x-rapidez::input name="firstname" v-model="checkout.shipping_address.firstname" required/>
        </div>
        <div class="col-span-12 sm:col-span-6">
            <x-rapidez::input name="lastname" v-model="checkout.shipping_address.lastname" required/>
        </div>
        <div class="col-span-6 sm:col-span-3">
            <x-rapidez::input name="zipcode" v-model="checkout.shipping_address.zipcode" required/>
        </div>
        <div class="col-span-6 sm:col-span-3">
            <x-rapidez::input name="housenumber" v-model="checkout.shipping_address.housenumber" :placeholder="__('Nr.')" required/>
        </div>
        <div class="col-span-12 sm:col-span-6 sm:col-start-1">
            <x-rapidez::input name="street" v-model="checkout.shipping_address.street" required/>
        </div>
        <div class="col-span-12 sm:col-span-6 sm:col-start-1">
            <x-rapidez::input name="city" v-model="checkout.shipping_address.city" required/>
        </div>
        <div class="col-span-12 sm:col-span-6 sm:col-start-1">
            <x-rapidez::input name="telephone" v-model="checkout.shipping_address.telephone" required/>
        </div>
    </div>

    <h1 v-if="checkout.shipping_methods.length" class="font-bold text-4xl mt-5 mb-3">@lang('Shipping method')</h1>

    <div class="my-2" v-for="method in checkout.shipping_methods">
        <input
            type="radio"
            name="shipping_method"
            :value="method.carrier_code+'_'+method.method_code"
            :id="method.carrier_code+'_'+method.method_code"
            v-model="checkout.shipping_method"
        >
        <label :for="method.carrier_code+'_'+method.method_code">@{{ method.method_title }}</label>
    </div>

    <button
        type="submit"
        class="btn btn-primary mt-3"
        :disabled="$root.loading"
        dusk="continue"
    >
        @lang('Continue')
    </button>
</form>