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

        $this->paginate = [
            'limit' => '2',
        ];

        $homeMusic = $this->HomeMusic->get($id, [
            'contain' => [],
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
                $this->Flash->success(__('The home music has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The home music could not be saved. Please, try again.'));
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
                $this->Flash->success(__('The home music has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The home music could not be saved. Please, try again.'));
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
            $this->Flash->success(__('The home music has been deleted.'));
        } else {
            $this->Flash->error(__('The home music could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
