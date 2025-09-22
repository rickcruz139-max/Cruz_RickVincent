<?php
class Pagination {
    private $total_rows;
    private $per_page;
    private $current_page;
    private $base_url;

    public function initialize($total_rows, $per_page, $current_page, $base_url) {
        $this->total_rows   = $total_rows;
        $this->per_page     = $per_page;
        $this->current_page = $current_page;
        $this->base_url     = $base_url;
    }

    public function paginate() {
        $total_pages = ceil($this->total_rows / $this->per_page);
        if ($total_pages <= 1) return '';

        $html = '<div class="flex space-x-2">';
        for ($i = 1; $i <= $total_pages; $i++) {
            $active = ($i == $this->current_page) 
                ? 'bg-blue-600 text-white' 
                : 'bg-gray-200 text-gray-700 hover:bg-gray-300';

            $html .= '<a href="'.$this->base_url.'&page='.$i.'" 
                        class="px-3 py-1 rounded '.$active.'">'.$i.'</a>';
        }
        $html .= '</div>';
        return $html;
    }
}
