<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Al Hattab Law Firm</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    

    <link rel="stylesheet" href="{{asset('home/css/add.css')}}">
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

   <!-- Main Content -->
   <div class="form-container">
        <h1>Add New Practice</h1>

        @if (session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('practices.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name_en">Name (English):</label>
        <input type="text" class="form-control" id="name_en" name="name_en" required>
    </div>

    <div class="form-group">
        <label for="name_ar">Name (Arabic):</label>
        <input type="text" class="form-control" id="name_ar" name="name_ar" dir="rtl" required>
    </div>

    <div class="form-group">
        <label for="description_en">Description (English):</label>
        <textarea class="form-control" id="description_en" name="description_en" rows="4"></textarea>
    </div>

    <div class="form-group">
        <label for="description_ar">Description (Arabic):</label>
        <textarea class="form-control" id="description_ar" name="description_ar" rows="4" dir="rtl"></textarea>
    </div>

    <div class="form-group">
        <label for="photo">Photo:</label>
        <input type="file" class="form-control" id="photo" name="photo">
    </div>

    <button type="submit" class="btn btn-success">Save</button>
</form>

    </div>

    
<!-- Display and Manage Practices -->
<div class="form-container form-container-bottom" style="margin-top: 30px;">
    <h1>Practices</h1>

    @if($practices->isEmpty())
        <p class="text-center text-muted">No practice areas available.</p>
    @else
        <table class="table table-dark table-bordered">
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Name (EN)</th>
                    <th>Name (AR)</th>
                    <th>Description (EN)</th>
                    <th>Description (AR)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
    @foreach ($practices as $practice)
        <tr>
            <td>
                @if ($practice->photo)
                    <img src="{{ asset('images/' . $practice->photo) }}" alt="{{ $practice->name_en }}">
                @else
                    <span>No Image</span>
                @endif
            </td>
            <td>
            <span class="short-text">{{ Str::limit($practice->name_en, 50, '...') }}</span>
            <span class="full-text">{{ $practice->name_en }}</span>
            </td>
            <td>
            <span class="short-text">{{ Str::limit($practice->name_ar, 50, '...') }}</span>
            <span class="full-text">{{ $practice->name_ar }}</span>
            </td>
            <td>
                <span class="short-text">{{ Str::limit($practice->description_en, 50, '...') }}</span>
                <span class="full-text">{{ $practice->description_en }}</span>
            </td>
            <td>
                <span class="short-text">{{ Str::limit($practice->description_ar, 50, '...') }}</span>
                <span class="full-text">{{ $practice->description_ar }}</span>
            </td>
            <td class="action-buttons">
                <!-- <a href="{{ route('practices.edit', $practice->id) }}" class="btn btn-edit">Edit</a> -->
                <form action="{{ route('practices.destroy', $practice->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
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
