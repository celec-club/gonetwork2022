<div class="comment">
    <div class="container">
        <form action="{{ url('comment') }}" method="POST" id="comment-form"> 
            <input type="hidden" name="year" value="{{ $year }}">
            @csrf
            <div class="comment-info">
                <input
                name="comment"
                type="text"
                id="comment"
                class="form-input left-border"
                placeholder=" "
                required
                />
                <label for="comment">LEAVE A COMMENT</label>
            </div>
            <button type="submit" style="cursor: pointer; color: white;" onclick="document.getElementById('comment-form').submit();"
            form="contact-form" 
            value="Submit">
            Send
        </button>
    </form>
</div>
</div>