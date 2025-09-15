<!--Joshua Lee-->

<!-- form.php -->
<form method="post" action="index.php" class="mt-3">
    <div class="mb-3">
        <label for="return_date" class="form-label">Return Date</label>
        <input type="date" name="return_date" id="return_date" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="due_date" class="form-label">Due Date</label>
        <input type="date" name="due_date" id="due_date" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Check</button>
</form>