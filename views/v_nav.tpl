{foreach $ds_loai as $loai}
	<li>
    	<a href="san_pham.php?ma_loai={$loai->ma_the_loai}">
        	{$loai->ten_loai}             
        </a>
    </li>
{/foreach}