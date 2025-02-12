<div class="widget">
    <h5 class="title">Get in Touch</h5>
    <form action="{{ route('contact.store') }}" method="POST" class="sidebar__contact">
        @csrf
        <input type="text" name="name" placeholder="Enter name*" value="{{ old('name') }}">
        <x-backend.error name="name" />
        <input type="email" name="email" placeholder="Enter your email*" value="{{ old('email') }}">
        <x-backend.error name="email" />
        <textarea name="message" id="message" placeholder="Massage*">{{ old('message') }}</textarea>
        <x-backend.error name="message" />
        <button type="submit" class="btn">send massage</button>
    </form>
</div>
