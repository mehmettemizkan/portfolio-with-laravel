<?php

/* Handle File Upload */

function handleUpload($inputName, $model = null)
{
    try {
        if (request()->hasFile($inputName)) {
            if ($model && \File::exists(public_path($model->inputName))) {
                \File::delete(public_path($model->inputName));
            }
            $file = request()->file($inputName);
            $fileName = rand() . $file->getClientOriginalName();
            $file->move(public_path('/uploads'), $fileName);

            $filePath = "/uploads/" . $fileName;
            return $filePath;
        }
    } catch (\Exception $e) {
        throw $e;
    }
}

/* Delete Files of Deleted Data */

function deleteFileIfExist($filePath)
{
    try {
        if (\File::exists(public_path($filePath))) {
            \Fİle::delete(public_path($filePath));
        }
    } catch (\Exception $e) {
        throw $e;
    }
}
