<template>
    <home-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    test from index
                </div>
            </div>
        </div>
    </home-layout>
</template>

<script>
    import HomeLayout from '../../Layouts/HomeLayout'
    
    export default {
        components:{
            HomeLayout
        },
        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
        }
    }
</script>