<?php
if (!empty($arResult['PROPERTIES']['GALLERY']['VALUE'])) {
    foreach ($arResult['PROPERTIES']['GALLERY']['VALUE'] as $key => $photoId) {
        $arPhoto = CFile::GetFileArray($photoId);

        $arResult['PROPERTIES']['photos'][$key]['src'] = $arPhoto['SRC'];
    }
}
