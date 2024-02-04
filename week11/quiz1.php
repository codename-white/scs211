<?php
$staff_obj = json_decode(file_get_contents("https://raw.githubusercontent.com/arc6828/SCS211/main/week13/staff.json"), true);
$staff = $staff_obj["people"];
?>

<?php foreach ($staff as $person) { ?>
    <div>
        <img src="<?= $person["image"] ?>" alt="<?= $person["name"] ?>" style="width: 100px; height: 100px;">
        <div>Name: <?= $person["name"] ?></div>
        <div>Education: <?= $person["education"] ?></div>
        <div>Role: <?= $person["role"] ?></div>
        <div>Email: <?= $person["email"] ?></div>
        <div>Phone: <?= $person["phone"] ?></div>
    </div>
<?php } ?>
