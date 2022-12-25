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
        methods: {}
    });
</script>
@endsection
