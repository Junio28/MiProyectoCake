<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * HomeMusic Controller
 *
 * @property \App\Model\Table\HomeMusicTable $HomeMusic
 * @method \App\Model\Entity\HomeMusic[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HomeMusicController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {

        $this->paginate = [
            'limit' => '2',
        ];

        $homeMusic = $this->paginate($this->HomeMusic);

        $this->set(compact('homeMusic'));
    }

    /**
     * View method
     *
     * @param string|null $id Home Music id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {

        $homeMusic = $this->HomeMusic->get($id, [
            'contain' => ['Album'],
        ]);

        $this->set(compact('homeMusic'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $homeMusic = $this->HomeMusic->newEmptyEntity();
        if ($this->request->is('post')) {
            $homeMusic = $this->HomeMusic->patchEntity($homeMusic, $this->request->getData());
            if ($this->HomeMusic->save($homeMusic)) {
                $this->Flash->success(__('El registro se ha guardado exitosamente!!.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El registro no ha sido guardado, por favor intente de nuevo mas tarde.'));
        }
        $this->set(compact('homeMusic'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Home Music id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $homeMusic = $this->HomeMusic->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $homeMusic = $this->HomeMusic->patchEntity($homeMusic, $this->request->getData());
            if ($this->HomeMusic->save($homeMusic)) {
                $this->Flash->success(__('El registro se ha actualizado exitosamente!!.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El registro no ha sido actualizado, por favor intente de nuevo mas tarde.'));
        }
        $this->set(compact('homeMusic'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Home Music id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $homeMusic = $this->HomeMusic->get($id);
        if ($this->HomeMusic->delete($homeMusic)) {
            $this->Flash->success(__('El registro se ha borrado satisfactoriamente!!.'));
        } else {
            $this->Flash->error(__('El registro no se ha eliminado, por favor intente de nuevo mas tarde.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
