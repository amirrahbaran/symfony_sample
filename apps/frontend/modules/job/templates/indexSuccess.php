<!-- apps/frontend/modules/job/templates/indexSuccess.php -->
<?php use_stylesheet('jobs.css') ?>

<div id="jobs">
    <?php foreach ($categories as $category): ?>
        <div class="category_<?php echo Jobeet::slugify($category->getName()) ?>">
            <div class="category">
                <div class="feed">
                    <a href="">Feed</a>
                </div>
                <h1><?php echo $category ?></h1>
            </div>

            <table class="jobs">
                <?php foreach ($category->getActiveJobs() as $i => $job): ?>
                    <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
                        <td class="location">
                            <?php echo $job->getLocation() ?>
                        </td>
                        <td class="position">
                            <?php echo link_to($job->getPosition(), 'job_show_user', $job) ?>
                        </td>
                        <td class="company">
                            <?php echo $job->getCompany() ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    <?php endforeach; ?>
    <div style="padding: 30px 15px">
        <a href="<?php echo url_for('job/new') ?>">New</a>
    </div>
</div>