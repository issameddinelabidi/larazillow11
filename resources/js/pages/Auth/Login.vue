<template>
    <form @submit.prevent="login">
        <div class="w-1/2 mx-auto">
            <div>
                <label for="email" class="label">Email (username)</label>
                <input id="email" v-model="form.email" type="text" name="email" class="input" />
                <div class="input-error" v-if="form.errors.email">{{ form.errors.email }}</div>
            </div>
            <div class="mt-4">
                <label for="password" class="label">Password</label>
                <input id="password" v-model="form.password" type="password" name="password" class="input" />
                <div class="input-error" v-if="form.errors.password">{{ form.errors.password }}</div>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn-primary w-full">Login</button>
                <div class="mt-4 text-center">
                    <Link :href="route('user-account.create')" class="text-sm text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300">
                        Need an account? Click here
                    </Link>
                </div>
            </div>
        </div>
    </form>
</template>

<script setup>
import { useForm, Link } from '@inertiajs/vue3';

const form = useForm({
    email: null,
    password: null,
});
const login = () => form.post(route('login.store'))
</script>