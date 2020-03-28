<?php
declare(strict_types=1);

namespace App\Controller;

use App\Model\Entity\GaNivelUsuario;
use Cake\Http\Exception\ForbiddenException;
/**
 * GeUnidadeMedida Controller
 *
 * @property \App\Model\Table\GeUnidadeMedidaTable $GeUnidadeMedida
 *
 * @method \App\Model\Entity\GeUnidadeMedida[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeUnidadeMedidaController extends AppController
{
    //Apenas o usuário administrador pode criar/editar/excluir unidades de medida
    public function autorizado(){
        foreach($this->nivelUsuario as $nivel){
            if($nivel->ga_nivel_acesso->sigla == "ADM"){
                return true;
                break;
            }else {
                return false;
                break;
            }
        }
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        if($this->autorizado()){
            $geUnidadeMedida = $this->paginate($this->GeUnidadeMedida);
            $this->set(compact('geUnidadeMedida'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
    }

    /**
     * View method
     *
     * @param string|null $id Ge Unidade Medida id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        if($this->autorizado()){
            $geUnidadeMedida = $this->GeUnidadeMedida->get($id, [
                'contain' => [],
            ]);

            $this->set('geUnidadeMedida', $geUnidadeMedida);
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
            $geUnidadeMedida = $this->GeUnidadeMedida->newEmptyEntity();
            if ($this->request->is('post')) {
                $geUnidadeMedida = $this->GeUnidadeMedida->patchEntity($geUnidadeMedida, $this->request->getData());
                if ($this->GeUnidadeMedida->save($geUnidadeMedida)) {
                    $this->Flash->success(__('Unidade de medida salva com sucesso'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('A unidade de medida não pode ser salva. Por favor tente novamente!'));
            }
            $this->set(compact('geUnidadeMedida'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Ge Unidade Medida id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        if($this->autorizado()){
            $geUnidadeMedida = $this->GeUnidadeMedida->get($id, [
                'contain' => [],
            ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $geUnidadeMedida = $this->GeUnidadeMedida->patchEntity($geUnidadeMedida, $this->request->getData());
                if ($this->GeUnidadeMedida->save($geUnidadeMedida)) {
                    $this->Flash->success(__('Unidade de medida editada com sucesso'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('A unidade de medida não pode ser editada. Por favor tente novamente!'));
            }
            $this->set(compact('geUnidadeMedida'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Ge Unidade Medida id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        if($this->autorizado()){
            $this->request->allowMethod(['post', 'delete']);
            $geUnidadeMedida = $this->GeUnidadeMedida->get($id);
            if ($this->GeUnidadeMedida->delete($geUnidadeMedida)) {
                $this->Flash->success(__('A unidade de medida foi excluída'));
            } else {
                $this->Flash->error(__('A unidade de medida não pode ser excluída. Por favor tente novamente'));
            }

            return $this->redirect(['action' => 'index']);
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
    }
}
