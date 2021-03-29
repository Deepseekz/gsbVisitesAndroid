<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Rencontres Controller
 *
 * @property \App\Model\Table\RencontresTable $Rencontres
 *
 * @method \App\Model\Entity\Rencontre[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RencontresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Equipes', 'Clubs']
        ];
        $rencontres = $this->paginate($this->Rencontres);

        $this->set(compact('rencontres'));
    }

    /**
     * View method
     *
     * @param string|null $id Rencontre id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rencontre = $this->Rencontres->get($id, [
            'contain' => ['Equipes', 'Clubs', 'Joueurs']
        ]);

        $this->set('rencontre', $rencontre);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rencontre = $this->Rencontres->newEntity();
        if ($this->request->is('post')) {
            $rencontre = $this->Rencontres->patchEntity($rencontre, $this->request->getData());
            if ($this->Rencontres->save($rencontre)) {
                $this->Flash->success(__('The rencontre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rencontre could not be saved. Please, try again.'));
        }
        $equipes = $this->Rencontres->Equipes->find('list', ['limit' => 200]);
        $clubs = $this->Rencontres->Clubs->find('list', ['limit' => 200]);
        $joueurs = $this->Rencontres->Joueurs->find('list', ['limit' => 200]);
        $this->set(compact('rencontre', 'equipes', 'clubs', 'joueurs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rencontre id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rencontre = $this->Rencontres->get($id, [
            'contain' => ['Joueurs']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rencontre = $this->Rencontres->patchEntity($rencontre, $this->request->getData());
            if ($this->Rencontres->save($rencontre)) {
                $this->Flash->success(__('The rencontre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rencontre could not be saved. Please, try again.'));
        }
        $equipes = $this->Rencontres->Equipes->find('list', ['limit' => 200]);
        $clubs = $this->Rencontres->Clubs->find('list', ['limit' => 200]);
        $joueurs = $this->Rencontres->Joueurs->find('list', ['limit' => 200]);
        $this->set(compact('rencontre', 'equipes', 'clubs', 'joueurs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rencontre id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rencontre = $this->Rencontres->get($id);
        if ($this->Rencontres->delete($rencontre)) {
            $this->Flash->success(__('The rencontre has been deleted.'));
        } else {
            $this->Flash->error(__('The rencontre could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
