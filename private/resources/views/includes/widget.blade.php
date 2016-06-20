<!--WIDGET Atau menu kanan website-->
<div class="col-lg-4">
    <div class="form-group">
        <label class="invisible">Search for:</label>
        <div class="form-group input-group">
            <input class="form-control" type="text" placeholder="Cari...">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </div>
    <div class="form-group">
        <ul class="nav nav-tabs" id="myTab">
            <li class="active">
                <a href="#popular-post" data-toggle="tab">Popular</a>
            </li>
            <li>
                <a href="#recent" data-toggle="tab">Recent</a>
            </li>
            <li>
                <a href="#messages" data-toggle="tab"><i class="fa fa-comments tab-comment"></i></a>
            </li>
        </ul>
        <div id="myTabContent" class="tab-content">
            <ul id="popular-post" class="tab-pane fade in active">
                <li>
                    <a href="#" class="tab-thumb thumbnail" rel="bookmark" title="SMKS Pembda Nias ikut LKS tingkat Provinsi Sumatera Utara">
                    {{ Html::image('assets/dist/img/olimpiade_60px.jpg', 'SMKS Pembda Nias ikut LKS tingkat Provinsi Sumatera Utara', array('class' => 'attachment-tab-small size-tab-small wp-post-image', 'height' => '60', 'width' => '60')) }}
                    </a>
                    <div class="content">
                        <a class="tab-entry" href="#" rel="bookmark" title="SMKS Pembda Nias ikut LKS tingkat Provinsi Sumatera Utara">
                            SMKS Pembda Nias ikut LKS tingkat Provinsi Sumatera Utara
                        </a>
                        <i>Mar 31, 2016</i>
                    </div>
                </li>

                <li>
                    <a href="#" class="tab-thumb thumbnail" rel="bookmark" title="Sambutan Kepala SMKS Pembda Nias">
                        {{ Html::image('assets/dist/img/kepala_sekolah_60px.jpg', 'Sambutan Kepala SMKS Pembda Nias', array('class' => 'attachment-tab-small size-tab-small wp-post-image', 'height' => '60', 'width' => '60')) }}
                    </a>
                    <div class="content">
                        <a class="tab-entry" href="#" rel="bookmark" title="Sambutan Kepala SMKS Pembda Nias">
                            Sambutan Kepala SMKS Pembda Nias
                        </a>
                        <i>Mar 31, 2016</i>
                    </div>
                </li>
            </ul>
            <ul id="recent" class="tab-pane fade">
                <li>bbb</li>
            </ul>
            <ul id="messages" class="tab-pane fade">
                <li>ccc</li>
            </ul>
        </div>
    </div>

    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">OSIS SMKS Pembda Nias</h3>
        </div>
        <div class="panel-body">
            OSIS
        </div>
    </div>
</div>