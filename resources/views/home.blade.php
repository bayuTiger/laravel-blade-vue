@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Vueお試し</div>

                <div class="card-body">
                    <input v-model="name">
                    <p>名前： @{{ name }}</p>
                    <button @click="toUpperCase">大文字にする</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    const app = new Vue({
        el: '#app',
        data: () => {
            return {
                name: '',
            }
        },
        methods: {
            toUpperCase: function () {
                this.name = this.name.toUpperCase();
            },
        },
    });
</script>
@endsection
