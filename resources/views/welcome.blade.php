@extends('layouts.masterlayout')

@section('contents')
    <h4>Home Page</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui officiis voluptatum sequi? Explicabo accusantium ipsa temporibus velit consequatur, officia exercitationem dolores, aliquid quasi ipsam necessitatibus quaerat molestiae deserunt repellendus maiores eaque omnis. Quasi culpa ipsum laboriosam architecto mollitia sapiente repudiandae, similique quo nesciunt eos cum, consectetur necessitatibus ex. Cum iure quo sunt iusto ex quis accusantium, aliquam maxime quae nisi voluptatum harum blanditiis dolores eum fuga neque atque dicta culpa enim? Et aliquid nihil cupiditate sapiente, sint nemo cumque. Hic non optio necessitatibus, expedita assumenda consequuntur. Maiores architecto doloribus sint praesentium minus laborum nostrum dolores? Non minus alias nemo nam?</p>
    <h4>Health</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero soluta distinctio corrupti excepturi perferendis, fuga nesciunt, maxime debitis ducimus eius et, recusandae suscipit. Fuga vitae et cumque ea natus, velit iusto consequuntur veritatis dolorum eaque? Amet debitis quasi sapiente distinctio.</p>
@endsection

@section('sidebar')

    {{-- display sidebar contents of parent layout --}}
    @parent
    {{-- add new contents --}}
    <ul>
        <li>Added Tasks</li>
    </ul>
@endsection

{{-- @push('script')
    <script src="/example.js"></script>
@endpush --}}