<x-layout>
    <x-slot name='pageTitle'>Home</x-slot>
    <x-slot name='content'>
        <div class="text-center">
            <img src="{{asset('images/me.jpeg')}}" alt="Profile" class="img-thumbnail w-25">
        </div>
        <div class="mt-5 text-justify">
            <h1 class="fw-bold font-satisfy">Hello,</h1>
            <p style="text-indent: 100px">I am <b class="text-warning">Al-Amin,</b> a passionate and seasoned Laravel developer with a knack for crafting robust and elegant web applications. My journey in the world of web development has been a thrilling adventure, and Laravel has been my trusty companion in this dynamic landscape.</p>
            <p>🛠️ Technical Wizardry: I wield the power of Laravel like a wizard mastering spells. My proficiency spans the Laravel ecosystem, from creating expressive syntax using Blade templates to architecting scalable and maintainable code with Eloquent ORM. I specialize in harnessing Laravel's features, such as routing, middleware, and artisan commands, to build seamless and efficient applications.</p>
        </div>
    </x-slot>
</x-layout>