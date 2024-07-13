@include('header')
<div class="row">
    <div class="col-md-6 offset-md-3">

        <form action="/post/save" method="POST">
            @csrf
            <div class="form-floating" style="margin-top: 20px;">
                <label for="floatingTextarea">Judul</label>
                <textarea name='title' class="form-control" required placeholder="Tuliskan judul" id="floatingTextarea"></textarea>
            </div>
            <div class="form-floating" style="margin-top: 20px;">
                <label for="floatingTextarea2">Detil Aktivitas</label>
                <textarea name='body' class="form-control" required placeholder="Tuliskan detil aktivitas" id="floatingTextarea2" style="height: 100px"></textarea>
            </div>

            <div class="row" style="margin-top: 20px;">
                <div class="col-md-2 offset-md-10 p-2 g-col-6">
                    <input type="submit" class="btn btn-success" value="Simpan"></input>
                </div>
            </div>
        </form>

    </div>
</div>
