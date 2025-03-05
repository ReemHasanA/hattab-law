<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Al Hattab Law Firm</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    

    <link rel="stylesheet" href="{{asset('home/css/add.css')}}">

    <script src="https://cdn.tiny.cloud/1/nh6qndk6j4h9f2qa39m6q7qn35i2ka1f5raxxcoojp84fuem/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    tinymce.init({
        selector: '#description_en, #description_ar',
        plugins: 'lists link paste',
        toolbar: 'undo redo | bold italic underline | alignleft aligncenter alignright | bullist numlist | removeformat',
        paste_auto_cleanup_on_paste: true,
        paste_as_text: true,
        height: 200,
        cleanup: true,
        forced_root_block: 'p', 
        force_p_newlines: true,
        remove_linebreaks: true,
        entity_encoding: "raw",
        valid_elements: "p,ul,ol,li,strong,em,a[href],br",
        valid_children: "+body[style],+p[strong|em|a|#text],+ul[li],+ol[li]",
        setup: function (editor) {
            editor.on('init', function () {
                if (editor.id === 'description_ar') {
                    editor.getBody().setAttribute('dir', 'rtl');
                    editor.getBody().style.textAlign = 'right';
                }
            });

            // Auto-clean list formatting
            editor.on('GetContent', function (e) {
                e.content = e.content.replace(/<\/ul>\s*<ul>/g, ''); // Merge consecutive <ul> lists
                e.content = e.content.replace(/<\/li>\s*<li>/g, '</li><li>'); // Fix <li> spacing
            });
        }
    });
});


</script>




</head>
<body>

@if (app()->environment('local'))
    <!-- Load TinyMCE locally for localhost (127.0.0.1:8000) -->
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
@else
    <!-- Load TinyMCE Cloud for live server -->
    <script src="https://cdn.tiny.cloud/1/YOUR_API_KEY/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
@endif

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
