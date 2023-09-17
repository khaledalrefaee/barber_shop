<?php
namespace App\Traits;

trait AutoGenerateRecId
{
    protected static function bootAutoGenerateRecId()
    {
        static::creating(function ($model) {
            // احصل على عدد السجلات الموجودة حتى الآن
            $recordCount = static::count() + 1;

            // قم بإنشاء rec_id بالتنسيق المطلوب
            $recId = 'KHM_' . str_pad($recordCount, 10, '0', STR_PAD_LEFT);

            $model->rec_id = $recId;
        });
    }
}