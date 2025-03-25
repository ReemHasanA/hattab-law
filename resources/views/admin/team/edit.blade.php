

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teams | Edit</title>

    <link rel="stylesheet" href="{{asset('home/css/ourteam.css')}}">

   

</head>
<body>
    <!-- Sidebar -->
   <div class="sidebar">
       <img id="LawLogo" src="{{ asset('img/homePage/logo.png') }}" alt="">
       <h2>Al Hattab Law Firm</h2>
       <ul>
       <li><a href="{{ route('admin.board') }}">Dashboard</a></li>
       <li><a href="{{ route('practices.create') }}">Practices</a></li>
           <li><a href="{{ route('team.create') }}">Our Team</a></li>
       </ul>
   </div>

   <div class="form-container">
    <h1>Edit Team Member</h1>

    @if (session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
    <div class="col-sm-12 mt-10">
        <div class="alert alert-danger alert-dismissible show" role="alert">
            <ul class="ul-validate">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    @endif
    <form action="{{ route('team.update', $member) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Name Fields -->
        <div class="form-group">
            <label for="name_en">Name (English):</label>
            <input type="text" class="form-control" id="name_en" name="name_en" required value="{{old('name_en', $member)}}">
        </div>

        <div class="form-group">
            <label for="name_ar">Name (Arabic):</label>
            <input type="text" class="form-control" id="name_ar" name="name_ar" value="{{old('name_ar', $member)}}">
        </div>

        <!-- Position Fields -->
        <div class="form-group">
            <label for="position_en">Position (English):</label>
            <input type="text" class="form-control" id="position_en" name="position_en" required value="{{old('position_en', $member)}}">
        </div>

        <div class="form-group">
            <label for="position_ar">Position (Arabic):</label>
            <input type="text" class="form-control" id="position_ar" name="position_ar" value="{{old('position_ar', $member)}}">
        </div>

        <!-- Bio Fields -->
        <div class="form-group">
            <label for="bio_en">Bio (English):</label>
            <textarea class="form-control" id="bio_en" name="bio_en" rows="4">{{old('bio_en', $member)}}</textarea>
        </div>

        <div class="form-group">
            <label for="bio_ar">Bio (Arabic):</label>
            <textarea class="form-control" id="bio_ar" name="bio_ar" rows="4">{{old('bio_ar', $member)}}</textarea>
        </div>

        <!-- Photo Upload -->
        <div class="form-group">
            <label for="photo">Photo:</label>
            <input type="file" class="form-control" id="photo" name="photo">
        </div>

        <button type="submit" class="btn btn-success">Edit</button>
    </form>
</div>
    
</body>
</html>

   
