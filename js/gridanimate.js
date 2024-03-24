$(document).ready(function () {
    $('.road ').click(function () {
        $(".Roadways").show();
        $(".Bridges").hide();
        $(".Building").hide();
        $(".Irrigation").hide();
        $(".WaterTreatmentPlant").hide();
        $(".Railways").hide();
    });
    $('.bridge').click(function () {
        $(".Roadways").hide();
        $(".Bridges").show();
        $(".Building").hide();
        $(".Irrigation").hide();
        $(".WaterTreatmentPlant").hide();
        $(".Railways").hide();
    });
    $('.build').click(function () {
        $(".Roadways").hide();
        $(".Bridges").hide();
        $(".Building").show();
        $(".Irrigation").hide();
        $(".WaterTreatmentPlant").hide();
        $(".Railways").hide();
    });
    $('.irri').click(function () {
        $(".Roadways").hide();
        $(".Bridges").hide();
        $(".Building").hide();
        $(".Irrigation").show();
        $(".WaterTreatmentPlant").hide();
        $(".Railways").hide();
    });
    $('.water').click(function () {
        $(".Roadways").hide();
        $(".Bridges").hide();
        $(".Building").hide();
        $(".Irrigation").hide();
        $(".WaterTreatmentPlant").show();
        $(".Railways").hide();
    });
    $('.rail').click(function () {
        $(".Roadways").hide();
        $(".Bridges").hide();
        $(".Building").hide();
        $(".Irrigation").hide();
        $(".WaterTreatmentPlant").hide();
        $(".Railways").show();
    });

});

