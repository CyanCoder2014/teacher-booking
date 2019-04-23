<?php
namespace App\FormMaker;


 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Http\Request;

 class FormMaker{
     protected $crud;
     protected $model;
     protected $method;
     protected $urlForm;
     protected $validation;
     public function __construct(array $crud,Model $model=null)
     {
         $this->crud=$crud;
         $this->model =$model;
     }
     public function make(){
         if(isset($this->method) && isset($this->urlForm) )
            return view('formMaker.form',['form' => $this])->render();
         $error = '';
         if(isset($this->method))
             $error.= 'method not set';
         if(isset($this->urlForm))
             $error.= ' urlForm not set';
         return $error;
     }
     protected function getvalidation(){
         $validation=[];
         foreach ($this->crud as $crud)
             if (isset($crud['validation']))
                 $validation[$crud['name']]=$crud['validation'];
         return $validation;
     }
     public function validate(Request $request){
         return $request->validate($this->getvalidation());
     }

     /**
      * @return array
      */
     public function getCrud(): array
     {
         return $this->crud;
     }

     /**
      * @param array $crud
      */
     public function setCrud(array $crud): void
     {
         $this->crud = $crud;
     }

     /**
      * @return Model
      */
     public function getModel()
     {
         return $this->model;
     }

     /**
      * @param Model $model
      */
     public function setModel(Model $model): void
     {
         $this->model = $model;
     }

     /**
      * @return mixed
      */
     public function getMethod()
     {
         return $this->method;
     }

     /**
      * @param mixed $method
      */
     public function setMethod($method): void
     {
         $this->method = $method;
     }

     /**
      * @return mixed
      */
     public function getUrlForm()
     {
         return $this->urlForm;
     }

     /**
      * @param mixed $urlForm
      */
     public function setUrlForm($urlForm): void
     {
         $this->urlForm = $urlForm;
     }
     public function getform(){
         $cruds = $this->crud;
         foreach ($cruds as $key => $crud)
         {
             if(isset($crud['values']) && is_string($crud['values']))
             {
                 $values = [ ];
                 if(!isset($crud['condition'])){
                     $model= explode(',',$crud['values']);
                     $model_name =$model[0];
                     $model_key =$model[1];
                     $model_value =$model[2];
                     foreach ($model_name::all() as $record)
                         $values[$record->$model_key]=$record->$model_value;
                 }
                 $cruds[$key]['values'] =$values;
             }
         }

         return $cruds;


     }
     public function HandleFiles(Request $request){
         $files=[];
         foreach ($this->getCrud() as $field)
         {
             if ($request->get($field['name']))
             switch ($field['type']){
                 case 'file':
//                    dd('hello');
                     if (isset($field['addable']) && $field['addable']){
                         $file_addresses=[];
                         if (isset($request->{$field['name']}) && is_array($request->{$field['name']}))
                             foreach ($request->file($field['name']) as $key => $file)
                             {
                                 $name = time() . '.'.$file->getClientOriginalName();
                                 $file->move(public_path('files'), $name);
                                 $file_addresses[]='files/'.$name;
                             }
                         if (isset($request->{$field['name'].'_old'}))
                             $file_addresses = array_merge($file_addresses,$request->{$field['name'].'_old'});
                         $files[$field['name']]= $file_addresses;
                     }
                     else{
                         if($request->hasFile($field['name'])){
                             $name = time() . '.'.$request->{$field['name']}->getClientOriginalName();
                             $request->file($field['name'])->move(public_path('files'), $name);
                             $files[$field['name']] ='files/'.$name;
                         }
                         elseif (isset($request->{$field['name'].'_old'}))
                             $files[$field['name']]= $request->{$field['name'].'_old'};
                         else
                             $files[$field['name']]='';


                     }
                     break;


             }


         }
         return $files;
     }



 }