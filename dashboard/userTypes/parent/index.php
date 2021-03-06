<?php
if (isset($_GET['lessons'])) {
    ?>
    <div id="parentSide" class="container margin-from-header">
        <div class="row">
            <div class="col-12">
                <div class="my-lessons-header"><?php echo $lessonTypeToString;?> Lessons
                </div>
            </div>
            <div class="col-12">
                <div id="lessonListWrapper" class="lessons-list-wrapper">
                    <?php include_once "../operations/checkOperations/checkLessons.php"?>
                </div>
            </div>
        </div>
    </div>
    <?php
}else{
    ?>
    <div id="parentSide" class="container margin-from-header">
    <div class="row">
        <div class="col-12">
            <div class="my-lessons-header"><?php echo $getChildFName;?>'s submitted lessons</div>
        </div>
        <div class="col-12">
            <div id="childrenSubmittedWrapper" class="children-submitted-wrapper">
                <?php include_once "../operations/checkOperations/getChildrenData.php"?>
            </div>
        </div>
    </div>
    </div>
    <?php
}
?>
