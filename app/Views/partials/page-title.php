<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0"><?= $title ? lang('Files.'.$title.'') : '' ?></h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);"><?= $pagetitle ? lang('Files.'.$pagetitle.'') : '' ?></a></li>
                    <li class="breadcrumb-item active"><?= $title ? lang('Files.'.$title.'') : '' ?></li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->