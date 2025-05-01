class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
      $complementos = [];
      foreach($nums as $index => $num) {
        $complemento = $target - $num;
        if(isset($complementos[$complemento])){
            return[$complementos[$complemento],$index];
        }
        $complementos[$num] = $index; 
      }
      return null;
         
    }
}
