<div>
<?=isset($message) ? $message : ""; ?>
<br>
<a href="/courses/addCourse">Add Course</a>
<br>
<br>
<table>
    <thead>
        <td>Course Code</td>
		<td>Course Name</td>
        <td>Status</td>
        <td>Action</td>
    </thead>
    <tbody>
        <?php foreach($courses as $course):?>
		<tr>
            <td><?=$course['course_code']?></td>
            <td><?=$course['course_name']?></td>
            <td><?=$course['status']?></td>
            <td>
                <a href="/courses/viewCourse/<?=$course['course_code']?>">View</a>
                <?php
                switch($course['status']) {
                    case "Active":
                        echo '<a href="/courses/deactCourse/'.$course['course_code'].'">Deactivate</a>';
                        break;
                    case "Inactive":
                        echo '<a href="/courses/actCourse/'.$course['course_code'].'">Activate</a>';
                        break;
                }
                ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>