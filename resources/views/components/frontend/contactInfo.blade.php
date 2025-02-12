<div class="widget">
    <h5 class="title">Contact Information</h5>
    @foreach (App\Models\User::all() as $user)
        <ul class="sidebar__contact__info">
            <li><span>Address :</span> {{ $user->address }}</li>
            <li><span>Mail :</span> {{ $user->email }}</li>
            <li><span>Phone :</span> {{ $user->phone }}</li>
        </ul>
    @endforeach
</div>
