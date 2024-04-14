<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add New News</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    label {
        font-size: 24px;
    }
</style>
<body>

<div class="container">
    <h2 class="text-center">Add New News</h2>

    <form method="POST" action="/addNew">
        @csrf
        <div class="form-group row">
            <label for="summary" class="col-3 text-primary">Header:</label>
            <input type="text" class="form-control col-9 @error('summary') is-invalid @enderror" id="summary" name="summary" required>
            @error('')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group row">
            <label for="short_description" class="col-3 text-primary">Short Text:</label>
            <textarea class="form-control col-9 @error('short_description') is-invalid @enderror" id="short_description" name="short_description" required></textarea>
            @error('')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group row">
            <label for="full_text" class="col-3 text-primary">Article:</label>
            <textarea class="form-control col-9 @error('full_text') is-invalid @enderror" id="full_text" name="full_text" required></textarea>
            @error('')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
        <a href="/" class="btn btn-warning">Back</a>
    </form>

</div>

</body>
</html>

