

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('home/css/ourteam.css')}}">

   

</head>
<body>
    <!-- Sidebar -->
   <div class="sidebar">
       <img id="LawLogo" src="{{ asset('img/homePage/lawLogo.png') }}" alt="">
       <h2>Al Hattab Law Firm</h2>
       <ul>
       <li><a href="{{ route('admin.board') }}">Dashboard</a></li>
       <li><a href="{{ route('practices.create') }}">Practices</a></li>
           <li><a href="{{ route('team.create') }}">Our Team</a></li>
       </ul>
   </div>

   <div class="form-container">
    <h1>Add New Team Member</h1>

    @if (session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Name Fields -->
        <div class="form-group">
            <label for="name_en">Name (English):</label>
            <input type="text" class="form-control" id="name_en" name="name_en" required>
        </div>

        <div class="form-group">
            <label for="name_ar">Name (Arabic):</label>
            <input type="text" class="form-control" id="name_ar" name="name_ar">
        </div>

        <!-- Position Fields -->
        <div class="form-group">
            <label for="position_en">Position (English):</label>
            <input type="text" class="form-control" id="position_en" name="position_en" required>
        </div>

        <div class="form-group">
            <label for="position_ar">Position (Arabic):</label>
            <input type="text" class="form-control" id="position_ar" name="position_ar">
        </div>

        <!-- Bio Fields -->
        <div class="form-group">
            <label for="bio_en">Bio (English):</label>
            <textarea class="form-control" id="bio_en" name="bio_en" rows="4"></textarea>
        </div>

        <div class="form-group">
            <label for="bio_ar">Bio (Arabic):</label>
            <textarea class="form-control" id="bio_ar" name="bio_ar" rows="4"></textarea>
        </div>

        <!-- Photo Upload -->
        <div class="form-group">
            <label for="photo">Photo:</label>
            <input type="file" class="form-control" id="photo" name="photo">
        </div>

        <button type="submit" class="btn btn-success">Add Member</button>
    </form>
</div>

<div class="form-container form-container-bottom" style="margin-top: 30px;">
    <h1>Team Members List</h1>

    @if($teamMembers->isEmpty())
        <p class="text-center text-muted">No team members available.</p>
    @else
        <table class="table table-dark table-bordered">
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Name (EN)</th>
                    <th>Name (AR)</th>
                    <th>Position (EN)</th>
                    <th>Position (AR)</th>
                    <th>Bio (EN)</th>
                    <th>Bio (AR)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teamMembers as $member)
                    <tr>
                        <td>
                            @if ($member->photo)
                                <img src="{{ asset('images/team/' . $member->photo) }}" alt="{{ $member->name_en }}" style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                            @else
                                <span>No Image</span>
                            @endif
                        </td>
                        <td>
                            <span class="short-text">{{ Str::limit($member->name_en, 50, '...') }}</span>
                            <span class="full-text">{{ $member->name_en }}</span>
                        </td>
                        <td>
                            <span class="short-text">{{ Str::limit($member->name_ar, 50, '...') }}</span>
                            <span class="full-text">{{ $member->name_ar }}</span>
                        </td>
                        <td>
                            <span class="short-text">{{ Str::limit($member->position_en, 50, '...') }}</span>
                            <span class="full-text">{{ $member->position_en }}</span>
                        </td>
                        <td>
                            <span class="short-text">{{ Str::limit($member->position_ar, 50, '...') }}</span>
                            <span class="full-text">{{ $member->position_ar }}</span>
                        </td>
                        <td>
                            <span class="short-text">{{ Str::limit($member->bio_en, 50, '...') }}</span>
                            <span class="full-text">{{ $member->bio_en }}</span>
                        </td>
                        <td>
                            <span class="short-text">{{ Str::limit($member->bio_ar, 50, '...') }}</span>
                            <span class="full-text">{{ $member->bio_ar }}</span>
                        </td>
                        <td class="action-buttons" style="height: 84px;">
                            <form action="{{ route('team.delete', $member->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>




    
</body>
</html>

   
