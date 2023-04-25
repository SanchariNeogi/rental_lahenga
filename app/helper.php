<?php

use App\Models\Category;
use App\Models\SubCategory;

function getcategory($category_id = NULL, $opt = NULL)
{
    if ($opt == NULL) {
        $data = Category::all();
        foreach ($data as $key => $val) {
            if ($category_id == $val->id)
                echo "<option value='" . $val->id . "' selected>" . $val->categoryName . "</option>";
            else
                echo "<option value='" . $val->id . "'>" . $val->categoryName . "</option>";
        }
    } else {
        $data = Category::find($category_id);
        return $data->categoryName;
    }
}


function getsubcategory($subcategory_id = NULL, $opt = NULL)
{
    if ($opt == NULL) {
        $data = SubCategory::all();
        foreach ($data as $key => $val) {
            if ($subcategory_id == $val->id)
                echo "<option value='" . $val->id . "' selected>" . $val->subcategoryName . "</option>";
            else
                echo "<option value='" . $val->id . "'>" . $val->subcategoryName . "</option>";
        }
    } else {
        $data = SubCategory::find($subcategory_id);
        return $data->subcategoryName;
    }
}
