<?php
class TienIch
{
    static function PaginationProduct($page, $perPage, $count)
    {
        $result = '<ul class="pagination">';
        $previous = '<li class="page-item"><a class="page-link" href="./nha-dat-ban.php?page=' . ($page - 1) . '" aria-label="Previous"><span aria-hidden="true">«</span></a></li>';
        $next = '<li class="page-item"><a class="page-link" href="./nha-dat-ban.php?page=' . ($page + 1) . '" aria-label="Next"><span aria-hidden="true">»</span></a></li>';
        $linkPage = '';

        if ($page == 1) {
            $previous = '';
        } else if ((($page * $perPage) - $count) >= 0) {
            $next = '';
        }

        $result .= $previous;
        for ($i = 1; $i <= (int)(($count / $perPage) + 1); $i++) {
            if($i == $page){
                $result .= '<li class="page-item disabled"><a class="page-link" href="./nha-dat-ban.php?page=' . $i . '">' . $i . '</a></li>';
                continue;
            }
            $result .= '<li class="page-item"><a class="page-link" href="./nha-dat-ban.php?page=' . $i . '">' . $i . '</a></li>';
        }

        $result .= $next;
        $result .= '</ul>';

        return $result;
    }
}
