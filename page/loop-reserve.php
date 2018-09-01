<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>
<div class="offset-sm-2 col-sm-8">
    <form>
        <div class="form-row">
            <div class="form-group col-sm-5">
                <label for="name">お名前</label>
                <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="例) 加藤啓吾">
            </div>
            <div class="col-sm-1"></div>
            <div class="form-group col-sm-5">
                <label for="tel">電話番号 (ハイフンなし)</label>
                <input type="text" class="form-control" id="tel" placeholder="例) 0312345678">
            </div>
        </div>
        <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="text" class="form-control" id="email" placeholder="例) hotel_vacationrental@gmail.com">
        </div>
        <div class="form-group">
            <label for="address">住所 (郵便番号なし)</label>
            <input type="text" class="form-control" id="address" placeholder="例) 東京都目黒区大岡山1-1-1-1">
        </div>
        <div class="form-row">
            <div class="form-group col-sm-5">
                <label for="day">宿泊日</label>
                <input type="text" class="form-control" id="day">
            </div>
            <div class="col-sm-1"></div>
            <div class="form-group col-sm-5">
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
        </div>
        <div class="form-row">
            <div class="form-group col-sm-5">
                <label for="people">人数</label>
                <select class="form-control" id="people">
                    <option>1人</option>
                    <option selected>2人</option>
                    <option>3人</option>
                    <option>4人</option>
                    <option>5人</option>
                    <option>6人</option>
                </select>
            </div>
            <div class="col-sm-1"></div>
            <div class="form-group col-sm-5">
                <label for="rooms">部屋数</label>
                <select class="form-control" id="rooms">
                    <option>1部屋</option>
                    <option>2部屋</option>
                </select>
            </div>
        </div>
        <div class="form-group form-check text-center">
            <input type="checkbox" class="form-check-input" id="ischeck">
            <label class="form-check-label" for="ischeck">全て入力したらチェックをいれてください</label>
        </div>
        <button type="submit" class="btn btn-primary mx-auto d-block px-5 rounded-0">上記で予約する</button>
    </form>
</div>

<?php the_content(); ?>

<?php endwhile; ?>
<?php endif; ?>






