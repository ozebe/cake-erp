<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Exception\ForbiddenException;
/**
 * GeUnidadeMassa Controller
 *
 * @property \App\Model\Table\GeUnidadeMassaTable $GeUnidadeMassa
 *
 * @method \App\Model\Entity\GeUnidadeMassa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeUnidadeMassaController extends AppController
{

    //Apenas o usuário administrador pode criar/editar/excluir unidades de massa
    public function autorizado(){
        $aut = false;
        foreach($this->nivelUsuario as $nivel){
            if($nivel->ga_nivel_acesso->sigla == "ADM"){
                $aut = true;
                break;
            }
        }
        return $aut;
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        if($this->autorizado()){
            $geUnidadeMassa = $this->paginate($this->GeUnidadeMassa);
            $this->set(compact('geUnidadeMassa'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
    }

    /**
     * View method
     *
     * @param string|null $id Ge Unidade Massa id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        if($this->autorizado()){
            $geUnidadeMassa = $this->GeUnidadeMassa->get($id, [
                'contain' => [],
            ]);

            $this->set('geUnidadeMassa', $geUnidadeMassa);
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        if($this->autorizado()){
            $geUnidadeMassa = $this->GeUnidadeMassa->newEmptyEntity();
            if ($this->request->is('post')) {
                $geUnidadeMassa = $this->GeUnidadeMassa->patchEntity($geUnidadeMassa, $this->request->getData());
                if ($this->GeUnidadeMassa->save($geUnidadeMassa)) {
                    $this->Flash->success(__('Unidade de massa salva com sucesso'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('A unidade de massa não pode ser salva. Por favor tente novamente!'));
            }
            $this->set(compact('geUnidadeMassa'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Ge Unidade Massa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        if($this->autorizado()){
            $geUnidadeMassa = $this->GeUnidadeMassa->get($id, [
                'contain' => [],
            ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $geUnidadeMassa = $this->GeUnidadeMassa->patchEntity($geUnidadeMassa, $this->request->getData());
                if ($this->GeUnidadeMassa->save($geUnidadeMassa)) {
                    $this->Flash->success(__('Unidade de massa editada com sucesso'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('A unidade de massa não pode ser editada. Por favor tente novamente!'));
            }
            $this->set(compact('geUnidadeMassa'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Ge Unidade Massa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        if($this->autorizado()){
            $this->request->allowMethod(['post', 'delete']);
            $geUnidadeMassa = $this->GeUnidadeMassa->get($id);
            if ($this->GeUnidadeMassa->delete($geUnidadeMassa)) {
                $this->Flash->success(__('A unidade de massa foi excluída'));
            } else {
                $this->Flash->error(__('A unidade de massa não pode ser excluída. Por favor tente novamente'));
            }

            return $this->redirect(['action' => 'index']);
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
    }
}
