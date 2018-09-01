<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>



<form>
    <div class="form-group">
        <label for="name">お名前</label>
        <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>
    <div class="form-group">
        <label for="email">メールアドレス</label>
        <input type="text" class="form-control" id="email">
    </div>
    <div class="form-group">
        <label for="tel">電話番号 (ハイフンなし)</label>
        <input type="text" class="form-control" id="tel">
    </div>
    <div class="form-group">
        <label for="address">住所 (郵便番号なし)</label>
        <input type="text" class="form-control" id="address">
    </div>
    <div class="form-group">
        <label for="day">宿泊日</label>
        <input type="text" class="form-control" id="day">
    </div>
    <div class="form-group">
        <label for="people">人数</label>
        <select class="form-control" id="people">
            <option>1人</option>
            <option>2人</option>
            <option>3人</option>
            <option>4人</option>
            <option>5人</option>
            <option>6人</option>
        </select>
    </div>
    <div class="form-group">
        <label for="days">宿泊数</label>
        <select class="form-control" id="days">
            <option>1泊</option>
            <option>2泊</option>
            <option>3泊</option>
            <option>4泊</option>
            <option>5泊</option>
            <option>6泊</option>
        </select>
    </div>
    <div class="form-group">
        <label for="rooms">部屋数</label>
        <select class="form-control" id="rooms">
            <option>1部屋</option>
            <option>2部屋</option>
        </select>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>





<?php endwhile; ?>
<?php endif; ?>
