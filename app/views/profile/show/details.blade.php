        

        <h1 class="profile-edit">{{$user->profile->storename}}</h1>
        <h3>Current status:- <strong>{{ $user->profile->status }}</strong></h3>
        <h3>Weekend Holidays:-{{ $user->profile->weekend }}</h3>
        <h3>Shop open and Close timing:-{{ $user->profile->timing }}</h3>
        @if(isset($user->profile->category_id) && $user->profile->category_id)
            <h3>Shop Category:-{{ $user->profile->category->name }}</h3>
        @else

        @endif

        @if(isset($user->profile->subcategory_id) && $user->profile->subcategory_id)

            <h3>Shop Subcategory:-{{ $user->profile->subcategory->name }}</h3>

        @else

        @endif
        <h3>About</h3><p>{{ $user->profile->about }}</p>
         <address>
         	<h3>Address</h3>
                {{ $user->profile->location }}, {{ $user->profile->city }}<br>
         	{{ $user->profile->district }}, {{ $user->profile->state }}<br>
                {{ $user->profile->country }}, {{ $user->profile->zipcode }}
         </address>