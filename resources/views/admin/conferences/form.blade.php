<div>
    <label>Title</label><br>
    <input type="text" name="title" value="{{ old('title', $conference['title'] ?? '') }}">
    @error('title')
        <div>{{ $message }}</div>
    @enderror
</div>

<br>

<div>
    <label>Description</label><br>
    <textarea name="description">{{ old('description', $conference['description'] ?? '') }}</textarea>
    @error('description')
        <div>{{ $message }}</div>
    @enderror
</div>

<br>

<div>
    <label>Speakers</label><br>
    <input type="text" name="speakers" value="{{ old('speakers', $conference['speakers'] ?? '') }}">
    @error('speakers')
        <div>{{ $message }}</div>
    @enderror
</div>

<br>

<div>
    <label>Date</label><br>
    <input type="date" name="date" value="{{ old('date', $conference['date'] ?? '') }}">
    @error('date')
        <div>{{ $message }}</div>
    @enderror
</div>

<br>

<div>
    <label>Time</label><br>
    <input type="time" name="time" value="{{ old('time', $conference['time'] ?? '') }}">
    @error('time')
        <div>{{ $message }}</div>
    @enderror
</div>

<br>

<div>
    <label>Address</label><br>
    <input type="text" name="address" value="{{ old('address', $conference['address'] ?? '') }}">
    @error('address')
        <div>{{ $message }}</div>
    @enderror
</div>

<br>