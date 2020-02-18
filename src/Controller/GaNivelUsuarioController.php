<?php
declare(strict_types=1);

namespace App\Controller;

use App\Model\Entity\GaUsuario;

/**
 * GaNivelUsuario Controller
 *
 * @property \App\Model\Table\GaNivelUsuarioTable $GaNivelUsuario
 *
 * @method \App\Model\Entity\GaNivelUsuario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GaNivelUsuarioController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $query = $this->GaNivelUsuario->find('all')->contain(['GaUsuario', 'GaNivelAcesso']);
        $this->set('query', $query);

        $gaNivelUsuario = $this->paginate($this->GaNivelUsuario);
        $this->set(compact('gaNivelUsuario'));
    }

    /**
     * View method
     *
     * @param string|null $id Ga Nivel Usuario id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gaNivelUsuario = $this->GaNivelUsuario->get($id, [
            'contain' => [],
        ]);

        $this->set('gaNivelUsuario', $gaNivelUsuario);

        $query = $this->GaNivelUsuario->get($id, [
            'contain' => ['GaUsuario', 'GaNivelAcesso'],
        ]);

        $this->set('query', $query);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gaNivelUsuario = $this->GaNivelUsuario->newEmptyEntity();
        if ($this->request->is('post')) {
            $gaNivelUsuario = $this->GaNivelUsuario->patchEntity($gaNivelUsuario, $this->request->getData());
            if ($this->GaNivelUsuario->save($gaNivelUsuario)) {
                $this->Flash->success(__('The ga nivel usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ga nivel usuario could not be saved. Please, try again.'));
        }
        $this->set(compact('gaNivelUsuario'));

        $query = $this->GaNivelUsuario->find('all', ['limit' => 200])->contain(['GaNivelAcesso']);
        $this->set(compact('query'));

        $nivel = $this->GaNivelUsuario->GaNivelAcesso->find('list',[
                        'keyField' => 'id',
                        'valueField' => 'descricao',
                        'order' => 'descricao'
        ]);
        $this->set(compact('nivel'));

        $usuario = $this->GaNivelUsuario->GaUsuario->find('list',[
            'keyField' => 'id',
            'valueField' => 'usuario',
            'order' => 'usuario'
        ]);
        $this->set(compact('usuario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ga Nivel Usuario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gaNivelUsuario = $this->GaNivelUsuario->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gaNivelUsuario = $this->GaNivelUsuario->patchEntity($gaNivelUsuario, $this->request->getData());
            if ($this->GaNivelUsuario->save($gaNivelUsuario)) {
                $this->Flash->success(__('The ga nivel usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ga nivel usuario could not be saved. Please, try again.'));
        }
        $this->set(compact('gaNivelUsuario'));

        $nivel = $this->GaNivelUsuario->GaNivelAcesso->find('list',[
            'keyField' => 'id',
            'valueField' => 'descricao',
            'order' => 'descricao'
        ]);
        $this->set(compact('nivel'));

        $usuario = $this->GaNivelUsuario->GaUsuario->find('list',[
            'keyField' => 'id',
            'valueField' => 'usuario',
            'order' => 'usuario'
        ]);
        $this->set(compact('usuario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ga Nivel Usuario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gaNivelUsuario = $this->GaNivelUsuario->get($id);
        if ($this->GaNivelUsuario->delete($gaNivelUsuario)) {
            $this->Flash->success(__('The ga nivel usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The ga nivel usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
